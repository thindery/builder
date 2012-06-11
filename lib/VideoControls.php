<?
class VideoControls extends View {
  function init(){
    parent::init();
    $this->add('Button')->set('Rewind');
    $this->add('Button','play_button')->set('Play');
    $this->add('Button')->set('Stop');
    $this->add('Button')->set('FastForward');
  }
}
?>