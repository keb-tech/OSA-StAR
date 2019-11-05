<?php

use  App\College;
use Illuminate\Database\Seeder;

class CollegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        College::create([
            'college_name'=> 'Faculty of Sacred Theology' /*ID: 1 */
        ]);

        College::create([
            'college_name'=> 'Faculty of Philosophy' /*ID: 2 */
        ]);

        College::create([
            'college_name'=> 'Faculty of Canon Law' /*ID: 3 */
        ]);

        College::create([
            'college_name'=> 'Faculty of Civil Law' /*ID: 4 */
        ]);

        College::create([
            'college_name'=> 'Faculty of Medicine and Surgery' /*ID: 5 */
        ]);

        College::create([
            'college_name'=> 'Faculty of Pharmacy' /*ID: 6 */
        ]);

        College::create([
            'college_name'=> 'Faculty of Arts and Letters' /*ID: 7 */
        ]);

        College::create([
            'college_name'=> 'Faculty of Engineering' /*ID: 8 */
        ]);

        College::create([
            'college_name'=> 'College of Education' /*ID: 9 */
        ]);

        College::create([
            'college_name'=> 'College of Science' /*ID: 10 */
        ]);

        College::create([
            'college_name'=> 'College of Architecture' /*ID: 11 */
        ]);

        College::create([
            'college_name'=> 'College of Commerce and Business Administration' /*ID: 12 */
        ]);

        College::create([
            'college_name'=> 'Conservatory of Music' /*ID: 13 */
        ]);

        College::create([
            'college_name'=> 'College of Nursing' /*ID: 14 */
        ]);

        College::create([
            'college_name'=> 'College of Rehabilitation Sciences' /*ID: 15 */
        ]);

        College::create([
            'college_name'=> 'College of Fine Arts & Design' /*ID: 16 */
        ]);

        College::create([
            'college_name'=> 'Alfredo M. Velayo College of Accountancy' /*ID: 17 */
        ]);

        College::create([
            'college_name'=> 'College of Tourism and Hospitality Management' /*ID: 18 */
        ]);

        College::create([
            'college_name'=> 'Institute of Physical Education and Athletics' /*ID: 19 */
        ]);
        
        College::create([
            'college_name'=> 'Institute of Information and Computing Sciences' /*ID: 20 */
        ]);




    }
}
