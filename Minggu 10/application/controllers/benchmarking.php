<?php 
class benchmarking extends CI_Controller
{
    public function index(){
       $this->benchmark->mark('startCode');
       for ($i = 1 ; $i<=100000; $i++)
       {
           echo $i;
       };
       $this->benchmark->mark('endCode');
       $this->load->view('benchmark');
    }
}
?>