<?php
/** An abstract class showing contents like a tree. The template should be like this:
 *
 * <?node?>
 *
 *  <?children?>
 *    No children found!        <!-- will be replaced with "node" clone if has children -->
 *  <?/?>
 *
 *
 * <?/?>
 *
 * Model requirements.
 *
 * If your model class is called Model_Category:
 *
 * $model->hasOne('Category','parent_id');  // defines parent
 * $model->hasMany('Category','parent_id'); // defines children
 */
class TreeView extends View {
    public $child_ref;
    public $parent_ref;

    function setModel($m){
        parent::setModel($m);

        $this->child_ref=$this->model->hierarchy_controller->child_ref;
    }

    function formatRow(){
        $this->current_row['page']=$this->api->url($this->stack[0]['page'].'/'.$this->current_row['page']);
    }

    public $stack=array();
    function renderModel($model){
        $output='';
        foreach($model as $this->current_row){
            $this->formatRow();
            $t=$this->template->cloneRegion('node');
            $t->set($this->current_row);

            if($model[$this->child_ref.'_cnt']){
                array_push($this->stack,$model);
                $t->setHTML('children',$this->renderModel($model->ref($this->child_ref)));
                array_pop($this->stack);
            }else{
                $t->tryDel('children_zone');
                $t->tryDel('icon');
            }
            $output.=$t->render();
        }
        return $output;
    }
    function render(){
        $r=$this->renderModel($this->model);
        $this->template->setHTML('node',$r);
        return parent::render();
    }
}
