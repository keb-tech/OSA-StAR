<!DOCTYPE html>
<html>
    <head>
        <title>Student Report</title>
        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        
    </head>
    <body>
   
        <!-- <div class="container">
            <header>
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><b>University of Santo Tomas</b></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Office for Student Affairs</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Espana Boulevard, Sampaloc, Manila, 1008 Metro Manila</h6>
                        </div>
                    </div>
                </div>
            </header> -->

                <br/>
                <br/>
                <br/>
                <br/>

            <main class="mt-5">

            <section id="studentInfo">
                    <div class="row">
                        <div class="col-md-4">
                            <b>Name: </b>{{ $student->last_name }}, {{ $student->first_name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <b>Student No: </b>{{ $student->student_id }}
                        </div>
                    </div>
                </section>

                <section id="certificationText" class="mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-uppercase text-center">Certification</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-justify">
                                This is to certify that the aforementioned individual is a student of the 
                                program <u>{{ $student->course }}</u>, under the <u>{{ $student->college }}</u>, has participated in the following 
                                activities during his/her stay in the University<sup>1</sup>
                            </p>
                        </div>
                    </div>
                </section>

                <section id="events">
                    
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="10%" style="font-size: 11px;background-color: #FFEE58;"><b>Academic Year</b></th>
                                        <th width="10%" style="font-size: 11px;background-color: #FFEE58;"><b>Semester</b></th>
                                        <th width="35%" style="font-size: 11px;background-color: #FFEE58;"><b>Event Title</b></th>
                                        <th width="25%" style="font-size: 11px;background-color: #FFEE58;"><b>Organized By</b></th>
                                        <th width="10%" style="font-size: 11px;background-color: #FFEE58;"><b>Involvement</b></th>
                                    </tr>
                                    </thead>
                                    
                                    @foreach($student->events as $event)
                                    <tbody>
                                    <tr>
                                        <td style="font-size: 10px;">{{ $event->academic_year }}</td>
                                        <td style="font-size: 10px;">{{ $event->semester}}</td>
                                        <td style="font-size: 10px;">{{ $event->name }}</td>
                                        <td style="font-size: 10px;">{{ $event->organization->name }}</td>
                                        <td style="font-size: 10px;">{{ $event->pivot->involvement }}</td>
                                    </tr>
                                    @endforeach
                                    
                                    <!-- <tr>
                                        <td><b>Description</b></td>
                                        <td colspan="3">
                                            {{ $event->semester }}
                                        </td>
                                    </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                </section>

                <section id="eventCount">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Total number of attended activities: {{ count($student->events) }}</p>
                        </div>
                    </div>
                </section>

                <br/>
                <br/>
                <br/>

                <section id="seal" class="mt-3">
                    <div class="row text-right mb-4">
                        <div class="col-md-12">
                            @if(!empty($ap))
                            <h4><b>{{ ucwords($ap->ap_name) }}</b></h4>
                            <p>{{ ucwords($ap->ap_position) }}</h5>
                            @else
                            <h4><b>Name</b></h4>
                            <h5>Position</h5>
                            @endif
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <sup>1</sup> You may contact the Office for Student Affairs, University of Santo Tomas to verify the authenticity of this 
                            certification by providing the student number at the end of this certificate.<br/>

                            <br/>

                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                            <small>Rm. 212 UST Tan Yan Kee Student Center <br/>
                            University of Santo Tomas, Espana Boulevard <br/>
                            Manila, 1015 PHILIPPINES <br/>
                            TEL. NOS.: 8-731-2985; 3-406-1611 LOC. 8267 <br/></small>

                        </div>
                    </div>
                </section>

            </main>

        </div>
    </body>
</html>

