@extends('users.layouts.layout')
@section('content')
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Prescription Table</h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Medicine_Name</th>
                                                    <th>How_Often</th>
                                                    <th>Patient_Name</th>
                                                    <th>Code</th>
                                                    <th>Doctor_Id</th>
                                                    <th>Date</th>
                                                    <th>Update</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($prescription as $item)
                                                <tr>
                                                    <td style="color: #000000;font-weight:bold">{{$i++}}</td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->medicine_name}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->how_often}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->patient_name}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->id}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->doctor_id}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->created_at}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->updated_at}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->description}}</pre></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 ?? Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                    </section>
                    </div>
                    </div>
                    </div>
                    
@endsection
