<?php 
class tugas4_model extends CI_Model {
    public function get_data()
	{
        $data_mahasiswa = [
			["nama"=>"Edo Kristian","nim"=>"E31192060"],
			["nama"=>"Chelsea Agatha","nim"=>"E31183456"],
			["nama"=>"Silvana","nim"=>"E31167890"] 
        ];
        return $data_mahasiswa;
	}
}
?>