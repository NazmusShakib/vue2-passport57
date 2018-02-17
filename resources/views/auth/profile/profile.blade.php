@extends('layouts.master')

@push('styles')


@endpush

@section('main-content')

    <div class="">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Profile
                            <small>Personal report</small>
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view"
                                         src="{{asset('assets/build/images/picture.jpg')}}" alt="Avatar"
                                         title="Change the avatar">
                                </div>
                            </div>
                            <h3>Samuel Doe</h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                                </li>

                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                                </li>

                                <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                                </li>
                            </ul>

                            <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                            <br>

                            <!-- start skills -->
                            <h4>Skills</h4>
                            <ul class="list-unstyled user_data">
                                <li>
                                    <p>Web Applications</p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"
                                             style="width: 50%;" aria-valuenow="49"></div>
                                    </div>
                                </li>
                                <li>
                                    <p>Website Design</p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"
                                             style="width: 70%;" aria-valuenow="69"></div>
                                    </div>
                                </li>
                                <li>
                                    <p>Automation &amp; Testing</p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"
                                             style="width: 30%;" aria-valuenow="29"></div>
                                    </div>
                                </li>
                                <li>
                                    <p>UI / UX</p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"
                                             style="width: 50%;" aria-valuenow="49"></div>
                                    </div>
                                </li>
                            </ul>
                            <!-- end of skills -->
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-12">

                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#activity"
                                           id="home-tab"
                                           role="tab"
                                           data-toggle="tab"
                                           aria-expanded="true">Recent Activity
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab_content2"
                                           role="tab"
                                           id="profile-tab"
                                           data-toggle="tab"
                                           aria-expanded="false">
                                            Projects Worked on
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#tab_content3"
                                           role="tab"
                                           id="profile-tab2"
                                           data-toggle="tab"
                                           aria-expanded="false">Profile
                                        </a>
                                    </li>
                                </ul>

                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel"
                                         class="tab-pane fade active in"
                                         id="activity"
                                         aria-labelledby="home-tab">

                                        <input type="text" v-model="title">

                                        @{{title}}

                                        <my-checkbox></my-checkbox>


                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                                         aria-labelledby="profile-tab">

                                        <!-- start user projects -->
                                        <table class="data table table-striped no-margin">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Client Company</th>
                                                <th class="hidden-phone">Hours Spent</th>
                                                <th>Contribution</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>New Company Takeover Review</td>
                                                <td>Deveint Inc</td>
                                                <td class="hidden-phone">18</td>
                                                <td class="vertical-align-mid">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             data-transitiongoal="35" style="width: 35%;"
                                                             aria-valuenow="35"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>New Partner Contracts Consultanci</td>
                                                <td>Deveint Inc</td>
                                                <td class="hidden-phone">13</td>
                                                <td class="vertical-align-mid">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-danger"
                                                             data-transitiongoal="15" style="width: 15%;"
                                                             aria-valuenow="15"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Partners and Inverstors report</td>
                                                <td>Deveint Inc</td>
                                                <td class="hidden-phone">30</td>
                                                <td class="vertical-align-mid">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             data-transitiongoal="45" style="width: 45%;"
                                                             aria-valuenow="45"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>New Company Takeover Review</td>
                                                <td>Deveint Inc</td>
                                                <td class="hidden-phone">28</td>
                                                <td class="vertical-align-mid">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                             data-transitiongoal="75" style="width: 75%;"
                                                             aria-valuenow="75"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!-- end user projects -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3"
                                         aria-labelledby="profile-tab">
                                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin
                                            coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next
                                            level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                            photo booth letterpress, commodo enim craft beer mlkshk </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/x-template" id="checkbox-template">
        <div>
            @{{var1}}
        </div>
    </script>


@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>


<script>

    var activity = new Vue({
        el: '#activity',
        data: {
            title: 'This from title.',
            description: 'This from description.'
        },
        methods: {

        }
    });
</script>

@endpush


