<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campus;
use App\Models\DesignationType;
use App\Models\Designation;
use App\Models\UserInformation;
use App\Models\User;
use App\Models\PermanentAddress;
use Illuminate\Support\Facades\Hash;
class UserDepartmentCampusProgramDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DesignationType::create([
            'type' => 'VPAA',
        ]);
        DesignationType::create([
            'type' => 'Campus Director',
        ]);
        DesignationType::create([
            'type' => 'Dean',
        ]);
        DesignationType::create([
            'type' => 'Programhead',
        ]);
        DesignationType::create([
            'type' => 'Faculty',
        ]);
        DesignationType::create([
            'type' => 'HR',
        ]);

        

         $campus = Campus::create([
            "campus_name" => "Access Campus"
        ]);
        

        $department = $campus->departments()->create([
            "department_name" => "College of Teacher Education"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','nancyespacio@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);

       $program = $department->programs()->create([
            "program_name" => "Bachelor of Physical Education"
        ]);
       Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','vivenciocalixtro@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
            
            
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }
      

       

        $program = $department->programs()->create([
            "program_name" => "Bachelor in Elementary Education"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','anesamangindra@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            "program_name" => "Bachelor in Secondary Education"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','adrianprotacio@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }
        $program = $department->programs()->create([
            "program_name" => "Diploma in Teaching"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','maerebugio@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }
        $department = $campus->departments()->create([
            "department_name" => "College of Agriculture"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','junitomarcelino@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);


        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Agriculture"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','romualdoortuoste@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }
        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Agricultural Technology"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','toninaluna@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $department = $campus->departments()->create([
            "department_name" => "College of Criminal Justice Education"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','edwincortejo@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);


        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Criminology"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','marilouperez@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }
        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Industrial Security Management"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','ramonitonazareno@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $department = $campus->departments()->create([
            "department_name" => "College of Health Sciences"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','carmelacamilaurbano@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);


        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Nursing"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','irilpanes@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Midwifery"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','cristelamariepelarco@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
$user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Medical Technology"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','mandydelfin@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
$user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }


        $department->programs()->create([
            "program_name" => "Diploma in Midwifery"
        ]);



        

        $department = $campus->departments()->create([
            "department_name" => "College of Law"
        ]);


        $department->programs()->create([
            "program_name" => "Bachelor of Laws"
        ]);


        $campus = Campus::create([
            "campus_name" => "Isulan Campus"
        ]);

        $department = $campus->departments()->create([
            "department_name" => "College of Engineering"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','meilaflorpaclibar@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);


        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Civil Engineering"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','lenmarcatajay@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);

       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Computer Engineering"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','denafelsarana@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

       $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Electronics Engineering"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','ivanroyevangelista@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $department = $campus->departments()->create([
            "department_name" => "College of Computer Studies"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','antonioelbren@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);

        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Computer Science"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','cyrusrael@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

       $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Information Technology"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','esneharabagundang@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Information Systems"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','romaamorcastromayor@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $department = $campus->departments()->create([
            "department_name" => "College of Industrial Technology"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','cyriljohndomingo@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);
    //     Designation::create([
    //         'designation_type_id' => 3,
    //         'user_id' => User::firstWhere('email','michaelarrivas@sksu.edu.ph')->id,
    //         'department_id' => $department->id,
    //    ]);

        $program = $department->programs()->create([
            "program_name" => "Bachelor in Technical-Vocational Teacher Education (BTVTEd)"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','michaelarrivas@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            "program_name" => "Bachelor of Science in Industrial Technology"
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','arnelceleste@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }


        $campus = Campus::create([
            "campus_name" => "Tacurong Campus"
        ]);


        $department = $campus->departments()->create([
            "department_name" => "College of Arts and Sciences"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','jeanelleargonza@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Arts in Economics'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','marygracemolina@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Arts in Political Science'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','judithasturias@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Biology'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','ziljihmolina@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Environmental Science'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','ziljihmolina@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $department = $campus->departments()->create([
            "department_name" => "College of Business Administration and Hospitality Management"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','jeannieromano@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Entrepreneurship'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','kristinemaeisales@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Accountancy'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','polianbugador@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Management Accounting'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','polianbugador@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }


        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Hospitality Management'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','samuelhilbero@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Accounting Information System'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','polianbugador@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }        
        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Tourism Management'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','renatodelacruz@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $campus = Campus::create([
            "campus_name" => "Kalamansig Campus"
        ]);


        $department = $campus->departments()->create([
            "department_name" => "College of Education"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','yolandadapitan@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);

        $program = $department->programs()->create([
            'program_name' => 'Diploma in Teaching'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','rosalindaona@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }


        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Secondary Education'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','yolandadapitan@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            'program_name' => 'Bachelor in Elementary Education'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','yolandadapitan@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }


        $department = $campus->departments()->create([
            "department_name" => "College of Fisheries"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','virginiapublico@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);


       $program = $department->programs()->create([
            'program_name' => 'Bachelor in Marine Biology'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','virginiapublico@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }


        $program = $department->programs()->create([
            'program_name' => 'Bachelor in Fisheries'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','virginiapublico@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $department = $campus->departments()->create([
            "department_name" => "College of Criminal Justice Education"
        ]);

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Criminology'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','ramonitonazareno@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $department = $campus->departments()->create([
            "department_name" => "College of Computer Studies"
        ]);

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Information Technology'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','reynandemafeliz@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $campus = Campus::create([
            "campus_name" => "Bagumbayan Campus"
        ]);


        $department = $campus->departments()->create([
            "department_name" => "College of Agribusiness"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','junitomarcelino@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);


        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Agribusiness'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','royjordan@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }
        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Technology and Livelihood Education major in Agri-fisheries'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','antoniobibat@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }
        
        $campus = Campus::create([
            "campus_name" => "Palimbang Campus"
        ]);


        $department = $campus->departments()->create([
            "department_name" => "College of Agriculture"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','sarahjanegrande@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);

       $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Agribusiness'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','sarahjanegrande@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $department = $campus->departments()->create([
            "department_name" => "College of Education"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','sarahjanegrande@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);

        $program = $department->programs()->create([
            'program_name' => 'Bachelor in Elementary Education'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','luzvimindacolong@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $campus = Campus::create([
            "campus_name" => "Lutayan Campus"
        ]);


        $department = $campus->departments()->create([
            "department_name" => "College of Agriculture"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','aurelioampo@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);


        $program = $department->programs()->create([
            'program_name' => 'Bachelor in Agricultural Technology'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','juareynondoy@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

        $program = $department->programs()->create([
            'program_name' => 'Bachelor of Science in Agriculture'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','jaysonsuhayon@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }


        $department = $campus->departments()->create([
            "department_name" => "College of Education"
        ]);
        Designation::create([
            'designation_type_id' => 3,
            'user_id' => User::firstWhere('email','aurelioampo@sksu.edu.ph')->id,
            'department_id' => $department->id,
       ]);


        $program = $department->programs()->create([
            'program_name' => 'Bachelor in Elementary Education'
        ]);
        Designation::create([
            'designation_type_id' => 4,
            'user_id' => User::firstWhere('email','merlepadilla@sksu.edu.ph')->id,
            'program_id' => $program->id,
            'department_id' => $department->id,
       ]);
       $user = Designation::where('designation_type_id', 5)->where('program_id', $program->id)->get();
       foreach ($user as $item) {
        $item->update([
           'department_id' => $department->id,
           'campus_id' => $campus->id,
        ]);
      }

    //    $users = User::all();
    //    foreach ($users as $user) {
    //        $user->update([
    //         'isAdmin' => 0,
    //        ]);
    //    }

    User::create([
        'name' => 'Manager',
        'email' => 'manager@gmail.com',
        'password' => Hash::make('password'),
        'isAdmin' => 1,
    ]);

    foreach (User::all() as $user) {
        $user->update([
            'profile_photo_path' => Null,
        ]);
    }



    Designation::create([
        'designation_type_id' => 1,
        'user_id' => 23,
    ]);

    Designation::create([
        'designation_type_id' => 2,
        'user_id' => 23,
        'campus_id'=> 1,
        'department_id' => 1,

    ]);
    Designation::create([
        'designation_type_id' => 2,
        'user_id' => 153,
        'department_id' => 6,
        'campus_id' => 2

    ]);
    Designation::create([
        'designation_type_id' => 2,
        'user_id' => 35,
        'department_id' => 10,
        'campus_id' => 3
    ]);
    Designation::create([
        'designation_type_id' => 2,
        'user_id' => 288,
        'department_id' => 12,
        'campus_id' => 4
    ]);
    Designation::create([
        'designation_type_id' => 2,
        'user_id' => 333,
        'department_id' => 18,
        'campus_id' => 7
    ]);
    Designation::create([
        'designation_type_id' => 2,
        'user_id' => 304,
        'department_id' => 15,
        'campus_id' => 5
    ]);
    Designation::create([
        'designation_type_id' => 6,
        'user_id' => 246,
    ]);

    foreach (Designation::where('designation_type_id', 5)->get() as $user) {
        UserInformation::create([
            'user_id' => $user->id,
            'age' => 0,
            'sex' => 0,
            'civil_status' => 0,
            'blood_type' => 0,
        ]);
    }

    //     PermanentAddress::create([
    //         'user_id' => $user->id,
    //         'refcitymun_id' => 0,
    //     ]);
    // }
  

    
    }

     
}
