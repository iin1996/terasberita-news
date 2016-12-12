<?php
class Berita extends BeritaController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('berita_m');
    $this->load->library('format');
  }
  public function get_feed($kanal_name)
  {
    // $kanal_name = 1;
    // return $this->berita_m->get_feed($kanal_name);
  }
  public function get_feeds($kanal = null)
  {
    $kanal_name = $kanal;
    $data['list'] = $this->berita_m->get_feed($kanal_name);
    return $this->load->view('feeds_v', $data , true);
  }
  public function get_breaking($kanal = null)
  {
    $data['list'] = $this->berita_m->get_breaking($kanal);
    return $this->load->view('breaking_v', $data , true);
  }
  public function get_breaking_terkait()
  {
    return $this->load->view('breaking_terkait_v', [] , true);
  }
  public function get_tkp($kanal = null)
  {
    $data['list'] = $this->berita_m->get_tkp($kanal);
    return $this->load->view('tkp_v', $data , true);
  }
  public function get_peristiwa()
  {
    return $this->load->view('peristiwa_v', [] , true);
  }
  public function get_popular($kanal = null)
  {
    $data['list'] = $this->berita_m->get_popular($kanal);
    return $this->load->view('popular_v', $data , true);
  }
  public function get_peoplesay($kanal = null)
  {
    $data['list'] = $this->berita_m->get_peoplesay($kanal);
    return $this->load->view('peoplesay_v', $data , true);
  }
}
 ?>