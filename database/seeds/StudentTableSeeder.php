<?php

// use App\Event;
use App\Student;
// use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Event::all()->each(function($event) {
        //     $involvement_types = ['Participant', 'Organizer'];
        //     factory(Student::class, 5)->create()->each(function($student) use ($event, $involvement_types) {
        //         $event->students()->attach($student->id, ['involvement' => $involvement_types[array_rand($involvement_types)]]);
        //     });
        // });

        
        Student::create([
            'student_number' => '2015093214',
            'first_name' => 'Kael',
            'last_name' => 'Arkangel',
            'middle_initial' => 'S',
            'college' => 'Faculty of Engineering',
            'course' => 'Bachelor of Science in Civil Engineering'
        ]);

        Student::create([
            'student_number' => '2015081923',
            'first_name' => 'Elika',
            'last_name' => 'Celestial',
            'middle_initial' => 'T',
            'college' => 'College of Architecture',
            'course' => 'Bachelor of Science in Architecture'
        ]);

        Student::create([
            'student_number' => '2015077126',
            'first_name' => 'Roi Geralt',
            'last_name' => 'Regalla',
            'middle_initial' => 'B',
            'college' => 'Faculty of Civil Law',
            'course' => 'Bachelor of Laws'
        ]);

        Student::create([
            'student_number' => '2015077127',
            'first_name' => 'Reinessia Lucille',
            'last_name' => 'Regalla',
            'middle_initial' => 'B',
            'college' => 'Faculty of Engineering',
            'course' => 'Bachelor of Science in Civil Engineering'
        ]);

        Student::create([
            'student_number' => '2016173521',
            'first_name' => 'Sayuri',
            'last_name' => 'Haruno',
            'middle_initial' => 'P',
            'college' => 'College of Architecture',
            'course' => 'Bachelor of Science in Architecture'
        ]);

        Student::create([
            'student_number' => '2015091919',
            'first_name' => 'Kuku',
            'last_name' => 'Rikapu',
            'middle_initial' => 'O',
            'college' => 'Institute of Information and Computing Sciences',
            'course' => 'Bachelor of Science in Information Technology'
        ]);

        Student::create([
            'student_number' => '2015012345',
            'first_name' => 'Kimmo',
            'last_name' => 'Lascove',
            'middle_initial' => 'D',
            'college' => 'Faculty of Engineering',
            'course' => 'Bachelor of Science in Mechanical Engineering'
        ]);

        Student::create([
            'student_number' => '2015061916',
            'first_name' => 'Nayr',
            'last_name' => 'Matianlad',
            'middle_initial' => 'D',
            'college' => 'Institute of Information and Computing Sciences',
            'course' => 'Bachelor of Science in Computer Science'
        ]);

        Student::create([
            'student_number' => '2015014014',
            'first_name' => 'Lesnar',
            'last_name' => 'Quezon',
            'middle_initial' => 'E',
            'college' => 'College of Rehabilitation Sciences',
            'course' => 'Bachelor of Science in Physical Therapy'
        ]);

        Student::create([
            'student_number' => '2015076076',
            'first_name' => 'Charlie',
            'last_name' => 'Benedictus',
            'middle_initial' => 'C',
            'college' => 'Institute of Physical Education and Athletics',
            'course' => 'Bachelor of Physical Education, major in Sports Wellness & Management'
        ]);

        Student::create([
            'student_number' => '2015027827',
            'first_name' => 'Augustus',
            'last_name' => 'Pogititus',
            'middle_initial' => 'E',
            'college' => 'College of Nursing',
            'course' => 'Bachelor of Science in Nursing'
        ]);

        Student::create([
            'student_number' => '2015021120',
            'first_name' => 'Jojo',
            'last_name' => 'Jolens',
            'middle_initial' => 'J',
            'college' => 'Conservatory of Music',
            'course' => 'Bachelor of Music in Vocal Performance'
        ]);

        Student::create([
            'student_number' => '2015077777',
            'first_name' => 'Hyper',
            'last_name' => 'Canins',
            'middle_initial' => 'D',
            'college' => 'College of Tourism and Hospitality Management',
            'course' => 'Bachelor of Science in Hospitality Management, major in Culinary Entrepreneurship'
        ]);

        Student::create([
            'student_number' => '2015087000',
            'first_name' => 'Bbibbi',
            'last_name' => 'Mike',
            'middle_initial' => 'U',
            'college' => 'Conservatory of Music',
            'course' => 'Bachelor of Music in Vocal Performance'
        ]);

        Student::create([
            'student_number' => '2015021011',
            'first_name' => 'Olivia',
            'last_name' => 'Dampa',
            'middle_initial' => 'I',
            'college' => 'Conservatory of Education',
            'course' => 'Bachelor of Science and Food Technology'
        ]);


    }
}
