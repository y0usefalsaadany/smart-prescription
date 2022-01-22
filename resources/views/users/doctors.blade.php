@extends('users.layouts.layout')
@section('content')
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Doctors Table</h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Specialization</th>
                                                    <th>Joined</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($doctors as $item)
                                                <tr>
                                                    <td style="color: #000000;font-weight:bold">{{$i++}}</td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->Name}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->Email}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->Phone}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->Address}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->Specialization}}</pre></td>
                                                    <td style="color: #000000;font-weight:bold"><pre>{{$item->created_at}}</pre></td>
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
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                    </section>
                    </div>
                    </div>
                    </div>
                    
@endsection
