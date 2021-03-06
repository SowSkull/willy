@extends('layouts.app')

@section('content')
 
 <section id="content">
                <div class="container container-alt">
                    <div class="block-header block-header-calendar">
                        <h2>
                            <span></span>
                            <small>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</small>
                        </h2>

                        <ul class="actions actions-calendar">
                            <li><a class="calendar-next" href=""><i class="zmdi zmdi-chevron-left"></i></a></li>
                            <li><a class="calendar-prev" href=""><i class="zmdi zmdi-chevron-right"></i></a></li>

                            <li class="dropdown">
                                <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu dm-icon pull-right">
                                    <li><a href="" data-calendar-view="month"><i class="zmdi zmdi-view-comfy active"></i> Month View</a></li>
                                    <li><a href="" data-calendar-view="basicWeek"><i class="zmdi zmdi-view-week"></i> Week View</a></li>
                                    <li><a href="" data-calendar-view="basicDay"><i class="zmdi zmdi-view-day"></i> Day View</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div id="calendar" class="card"></div>

                    <!-- Add event -->
                    <div class="modal fade" id="modal-new-event" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add an Event</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-event" role="form">
                                        <div class="form-group">
                                            <div class="fg-line">
                                                <input type="text" class="input-sm form-control" id="new-event-title" placeholder="Event Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="event-tag">
                                                <span class="bgm-blue">
                                                    <input type="radio" value="bgm-blue" name="event-tag" checked="">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-teal">
                                                    <input type="radio" value="bgm-teal" name="event-tag">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-red">
                                                    <input type="radio" value="bgm-red" name="event-tag">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-green">
                                                    <input type="radio" value="bgm-green" name="event-tag">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-cyan">
                                                    <input type="radio" value="bgm-cyan" name="event-tag">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-amber">
                                                    <input type="radio" value="bgm-amber" name="event-tag">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-purple">
                                                    <input type="radio" value="bgm-purple" name="event-tag">
                                                    <i></i>
                                                </span>
                                            </div>
                                        </div>

                                        <input type="hidden" id="new-event-start"/>
                                        <input type="hidden" id="new-event-end"/>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-link" id="btn-add-event">Add Event</button>
                                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit event -->
                    <div class="modal fade" id="modal-edit-event" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Event</h4>
                                </div>

                                <div class="modal-body">
                                    <form class="edit-event__form">
                                        <div class="form-group">
                                            <div class="fg-line">
                                                <input type="text" class="form-control edit-event-title" placeholder="Event Title">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="event-tag event-tag-edit">
                                                <span class="bgm-blue">
                                                    <input type="radio" value="bgm-blue" name="event-tag" checked="">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-teal">
                                                    <input type="radio" value="bgm-teal" name="event-tag">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-red">
                                                    <input type="radio" value="bgm-red" name="event-tag">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-green">
                                                    <input type="radio" value="bgm-green" name="event-tag">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-cyan">
                                                    <input type="radio" value="bgm-cyan" name="event-tag">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-amber">
                                                    <input type="radio" value="bgm-amber" name="event-tag">
                                                    <i></i>
                                                </span>
                                                <span class="bgm-purple">
                                                    <input type="radio" value="bgm-purple" name="event-tag">
                                                    <i></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="fg-line">
                                                <textarea class="form-control edit-event-description auto-size" placeholder="Event Desctiption"></textarea>
                                            </div>
                                        </div>

                                        <input type="hidden" class="edit-event-id">
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-link" data-calendar="update">Update</button>
                                    <button class="btn btn-link" data-calendar="delete">Delete</button>
                                    <button class="btn btn-link" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>
             <script src="js/app.min.js"></script>

        <!-- Calendar Script -->
        <script type="text/javascript">
            $(document).ready(function() {
                var date = new Date();
                var m = date.getMonth();
                var y = date.getFullYear();
                var target = $('#calendar');

                target.fullCalendar({
                    header: {
                        right: '',
                        center: '',
                        left: ''
                    },

                    theme: false,
                    selectable: true,
                    selectHelper: true,
                    editable: true,
                    events: [
                        {
                            id: 1,
                            title: 'Fusce dapibus tellus',
                            start: new Date(y, m, 1),
                            allDay: true,
                            className: 'bgm-cyan',
                            description: 'Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
                        },
                        {
                            id: 2,
                            title: 'Fusce dapibus tellus',
                            start: new Date(y, m, 10),
                            allDay: true,
                            className: 'bgm-amber',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                        },
                        {
                            id: 3,
                            title: 'Egestas Justo',
                            start: new Date(y, m, 18),
                            allDay: true,
                            className: 'bgm-green',
                            description: ''
                        },
                        {
                            id: 4,
                            title: 'Bibendum Vehicula Quam',
                            start: new Date(y, m, 20),
                            allDay: true,
                            className: 'bgm-blue',
                            description: ''
                        },
                        {
                            id: 5,
                            title: 'Venenatis Dolor Porta',
                            start: new Date(y, m, 5),
                            allDay: true,
                            className: 'bgm-teal',
                            description: 'Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.'
                        },
                        {
                            id: 6,
                            title: 'Sem Pharetra',
                            start: new Date(y, m, 21),
                            allDay: true,
                            className: 'bgm-red',
                            description: 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
                        },
                        {
                            id: 7,
                            title: 'Ullamcorper Porta',
                            start: new Date(y, m, 5),
                            allDay: true,
                            className: 'bgm-amber',
                            description: 'Malesuada Ullamcorper Nullam'
                        },
                        {
                            id: 8,
                            title: 'Egestas',
                            start: new Date(y, m, 5),
                            allDay: true,
                            className: 'bgm-green',
                            description: ''
                        },
                        {
                            id: 9,
                            title: 'Purus',
                            start: new Date(y, m, 1),
                            allDay: true,
                            className: 'bgm-green',
                            description: 'Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
                        },
                        {
                            id: 10,
                            title: 'Risus Elit',
                            start: new Date(y, m, 15),
                            allDay: true,
                            className: 'bgm-cyan',
                            description: 'Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.'
                        },
                        {
                            id: 11,
                            title: 'Risus Fermentum Justo',
                            start: new Date(y, m, 25),
                            allDay: true,
                            className: 'bgm-blue',
                            description: 'Vehicula Cras'
                        },
                        {
                            id: 12,
                            title: 'Porta Ornare Euismod',
                            start: new Date(y, m, 30),
                            allDay: true,
                            className: 'bgm-red',
                            description: ''
                        },
                        {
                            id: 13,
                            title: 'Amet Adipiscing',
                            start: new Date(y, m, 30),
                            allDay: true,
                            className: 'bgm-teal',
                            description: ''
                        },
                    ],

                    dayClick: function(date) {
                        var isoDate = moment(date).toISOString();

                        $('#modal-new-event').modal('show');
                        $('#event-name').val('');
                        $('#new-event-start').val(isoDate);
                        $('#new-event-end').val(isoDate);
                    },

                    viewRender: function (view) {
                        var calendarDate = $("#calendar").fullCalendar('getDate');
                        var calendarMonth = calendarDate.month();

                        //Set data attribute for header. This is used to switch header images using css
                        $('#calendar .fc-toolbar').attr('data-calendar-month', calendarMonth);

                        //Set title in page header
                        $('.block-header-calendar > h2 > span').html(view.title);
                    },

                    eventClick: function (event, element) {

                        $('.edit-event-id').val(event.id);
                        $('.edit-event-title').val(event.title);
                        $('.edit-event-description').val(event.description);
                        $('#modal-edit-event input[value='+event.className+']').prop('checked', true);
                        $('#modal-edit-event').modal('show');
                    }
                });


                //Add new Event
                $('body').on('click', '#btn-add-event', function(){
                    var eventTitle = $('#new-event-title').val();

                    var GenRandom =  {
                        Stored: [],
                        Job: function(){
                            var newId = Date.now().toString().substr(6); // or use any method that you want to achieve this string

                            if( !this.Check(newId) ){
                                this.Stored.push(newId);
                                return newId;
                            }
                            return this.Job();
                        },
                        Check: function(id){
                            for( var i = 0; i < this.Stored.length; i++ ){
                                if( this.Stored[i] == id ) return true;
                            }
                            return false;
                        }
                    };

                    if (eventTitle != '') {
                        $('#calendar').fullCalendar('renderEvent', {
                            id: GenRandom.Job(),
                            title: eventTitle,
                            start: $('#new-event-start').val(),
                            end:  $('#new-event-end').val(),
                            allDay: true,
                            className: $('.event-tag input:checked').val()

                        },true );

                        $('.form-event')[0].reset()
                        $('#modal-new-event').modal('hide');
                        $('#new-event-title').closest('.form-group').removeClass('has-error');
                    }
                    else {
                        $('#new-event-title').closest('.form-group').addClass('has-error');
                        $('#new-event-title').focus();
                    }
                });


                //Update/Delete an Event
                $('body').on('click', '[data-calendar]', function(){
                    var calendarAction = $(this).data('calendar');
                    var currentId = $('.edit-event-id').val();
                    var currentTitle = $('.edit-event-title').val();
                    var currentDesc = $('.edit-event-description').val();
                    var currentClass = $('.event-tag-edit input:checked').val();
                    var currentEvent = $('#calendar').fullCalendar( 'clientEvents', currentId );

                    //Update
                    if(calendarAction === 'update') {
                        if (currentTitle != '') {
                            currentEvent[0].title = currentTitle;
                            currentEvent[0].description = currentDesc;
                            currentEvent[0].className = currentClass;

                            $('#calendar').fullCalendar('updateEvent', currentEvent[0]);
                            $('#modal-edit-event').modal('hide');
                        }
                        else {
                            $('.edit-event-title').closest('.form-group').addClass('has-error');
                            $('.edit-event-title').focus();
                        }
                    }

                    //Delete
                    if(calendarAction === 'delete') {
                        $('#modal-edit-event').modal('hide');

                        setTimeout(function () {
                            swal({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then(function() {
                                target.fullCalendar('removeEvents', currentId);
                                swal(
                                    'Deleted!',
                                    'Your list has been deleted.',
                                    'success'
                                );
                            })
                        }, 200);
                    }
                });


                //Calendar views switch
                $('body').on('click', '[data-calendar-view]', function(e){
                    e.preventDefault();

                    $('[data-calendar-view]').removeClass('active');
                    $(this).addClass('active');
                    var calendarView = $(this).attr('data-calendar-view');
                    target.fullCalendar('changeView', calendarView);
                });


                //Calendar Next
                $('body').on('click', '.calendar-next', function (e) {
                    e.preventDefault();
                    target.fullCalendar('next');
                });


                //Calendar Prev
                $('body').on('click', '.calendar-prev', function (e) {
                    e.preventDefault();
                    target.fullCalendar('prev');
                });
            });
        </script>
            @stop
