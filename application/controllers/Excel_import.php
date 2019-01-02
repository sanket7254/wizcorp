<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('excel_import_model');
  $this->load->library('excel');
 }

 function index()
 {
  $this->load->view('excel_import');
 }
 
 function fetch()
 {
  $data = $this->excel_import_model->select();
  $output = '
  <h3 align="center">Total Data - '.$data->num_rows().'</h3>
  <table class="table table-striped table-bordered">
   <tr>
    <th>Course Name</th>
    <th>Course Fees</th>
    <th>Commission</th>
    <th>Course Details</th>
   </tr>
  ';
  foreach($data->result() as $row)
  {
   $output .= '
   <tr>
    <td>'.$row->course_name.'</td>
    <td>'.$row->course_fees.'</td>
    <td>'.$row->commission.'</td>
    <td>'.$row->course_details.'</td>
   </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 function import()
 {
  if(isset($_FILES["file"]["name"]))
  {
   $path = $_FILES["file"]["tmp_name"];
   $object = PHPExcel_IOFactory::load($path);
   foreach($object->getWorksheetIterator() as $worksheet)
   {
    $highestRow = $worksheet->getHighestRow();
    $highestColumn = $worksheet->getHighestColumn();
    for($row=2; $row<=$highestRow; $row++)
    {
     $course_name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
     $course_fees = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
     $commission = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
     $course_details = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
     $data[] = array(
      'course_name'  => $course_name,
      'course_fees'   => $course_fees,
      'commission'    => $commission,
      'course_details'  => $course_details,
      'user_id' => $this->session->userdata('user_id')
     );
    }
   }
   $this->excel_import_model->insert($data);
   echo 'Data Imported successfully';
  } 
 }
}

?>
