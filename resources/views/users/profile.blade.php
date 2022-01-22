@extends('users.layouts.layout')
@section('content')
        <!-- /# row -->
        <section id="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="user-profile">
                    @if (session()->has('success'))
                          <div class="alert alert-success text-center">
                            <p style="color: white">{{session('success')}}</p>
                          </div>
                    @endif
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="user-profile-name">{{$profile->Name}}</div>
                        <div class="user-Location">
                          <i class="ti-location-pin"></i>{{$profile->Address}}</div>
                        <div class="user-job-title">{{$profile->Specialization}}</div>
                        <div class="ratings">
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          <i class="ti-plus"> Add Prescription</i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Write Prescription</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="/write-prescription" method="POST">
                                  @csrf
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Medicine Name</label>
                                    <input type="text" name="medicine_name" class="form-control" id="exampleInputPassword1">
                                  @error('medicine_name')
                                      <p style="color: #910000">{{$message}}</p>
                                  @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    @error('description')
                                      <p style="color: #910000">{{$message}}</p>
                                    @enderror
                                  </div>
                                
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">How Often</label>
                                    <input type="text" name="how_often" class="form-control" id="exampleInputPassword1">
                                    @error('how_often')
                                      <p style="color: #910000">{{$message}}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Patient Name</label>
                                    <input type="text" name="patient_name" class="form-control" id="exampleInputPassword1">
                                    @error('patient_name')
                                      <p style="color: #910000">{{$message}}</p>
                                    @enderror
                                  </div>
                                    <input type="hidden" name="doctor_id" value="{{$profile->id}}" class="form-control" id="exampleInputPassword1">
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="custom-tab user-profile-tab">
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                              <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="1">
                              <div class="contact-information">
                                <h4>Contact information</h4>
                                <div class="phone-content">
                                  <span class="contact-title">Phone:</span>
                                  <span class="phone-number">{{$profile->Phone}}</span>
                                </div>
                                <div class="address-content">
                                  <span class="contact-title">Address:</span>
                                  <span class="mail-address">{{$profile->Address}}</span>
                                </div>
                                <div class="email-content">
                                  <span class="contact-title">Email:</span>
                                  <span class="contact-email">{{$profile->Email}}</span>
                                </div>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /# row -->

          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
                <p>2018 © Admin Board. -
                  <a href="#">example.com</a>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
@endsection