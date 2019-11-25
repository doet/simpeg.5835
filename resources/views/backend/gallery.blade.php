@extends('backend.app_backend')

@section('css')
    <!-- page specific plugin styles -->
    <link href="{{ asset('/css/colorbox.min.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{{url('')}}">Home</a>
            </li>

            @foreach(array_reverse($aktif_menu) as $row)
            <li>
                {!!$row['nama']!!}
            </li>
            @endforeach
        </ul><!-- /.breadcrumb -->
        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- /.nav-search -->
    </div>
@endsection

@section('content')

    <div class="page-header">
        <h1>
            Gallery
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                responsive photo gallery using colorbox
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div>
                <ul class="ace-thumbnails clearfix">
                    <li>
                        <a href="{{asset('images/gallery/image-1.jpg')}}" title="Photo Title" data-rel="colorbox">
                            <img width="150" height="150" alt="150x150" src="{{asset('images/gallery/thumb-1.jpg')}}" />
                        </a>

                        <div class="tags">
                            <span class="label-holder">
                                <span class="label label-info">breakfast</span>
                            </span>

                            <span class="label-holder">
                                <span class="label label-danger">fruits</span>
                            </span>

                            <span class="label-holder">
                                <span class="label label-success">toast</span>
                            </span>

                            <span class="label-holder">
                                <span class="label label-warning arrowed-in">diet</span>
                            </span>
                        </div>

                        <div class="tools">
                            <a href="#">
                                <i class="ace-icon fa fa-link"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-paperclip"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-times red"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href="{{asset('images/gallery/image-2.jpg')}}" data-rel="colorbox">
                            <img width="150" height="150" alt="150x150" src="{{asset('images/gallery/thumb-2.jpg')}}" />
                            <div class="text">
                                <div class="inner">Sample Caption on Hover</div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="{{asset('images/gallery/image-3.jpg')}}" data-rel="colorbox">
                            <img width="150" height="150" alt="150x150" src="{{asset('images/gallery/thumb-3.jpg')}}" />
                            <div class="text">
                                <div class="inner">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class="tools tools-bottom">
                            <a href="#">
                                <i class="ace-icon fa fa-link"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-paperclip"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-times red"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href="{{asset('/images/gallery/image-4.jpg')}}" data-rel="colorbox">
                            <img width="150" height="150" alt="150x150" src="{{asset('images/gallery/thumb-4.jpg')}}" />
                            <div class="tags">
                                <span class="label-holder">
                                    <span class="label label-info arrowed">fountain</span>
                                </span>

                                <span class="label-holder">
                                    <span class="label label-danger">recreation</span>
                                </span>
                            </div>
                        </a>

                        <div class="tools tools-top">
                            <a href="#">
                                <i class="ace-icon fa fa-link"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-paperclip"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-times red"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div>
                            <img width="150" height="150" alt="150x150" src="{{asset('images/gallery/thumb-5.jpg')}}" />
                            <div class="text">
                                <div class="inner">
                                    <span>Some Title!</span>

                                    <br />
                                    <a href="{{asset('/images/gallery/image-5.jpg')}}" data-rel="colorbox">
                                        <i class="ace-icon fa fa-search-plus"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-user"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-share"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="{{asset('/images/gallery/image-6.jpg')}}" data-rel="colorbox">
                            <img width="150" height="150" alt="150x150" src="{{asset('images/gallery/thumb-6.jpg')}}" />
                        </a>

                        <div class="tools tools-right">
                            <a href="#">
                                <i class="ace-icon fa fa-link"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-paperclip"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-times red"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href="{{asset('/images/gallery/image-1.jpg')}}" data-rel="colorbox">
                            <img width="150" height="150" alt="150x150" src="{{asset('images/gallery/thumb-1.jpg')}}" />
                        </a>

                        <div class="tools">
                            <a href="#">
                                <i class="ace-icon fa fa-link"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-paperclip"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-times red"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href="{{asset('/images/gallery/image-2.jpg')}}" data-rel="colorbox">
                            <img width="150" height="150" alt="150x150" src="{{asset('images/gallery/thumb-2.jpg')}}" />
                        </a>

                        <div class="tools tools-top in">
                            <a href="#">
                                <i class="ace-icon fa fa-link"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-paperclip"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-pencil"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-times red"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div><!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('js')
    <!-- page specific plugin scripts -->
    <script src="{{ asset('/js/jquery.colorbox.min.js') }}"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            var $overflow = '';
            var colorbox_params = {
                rel: 'colorbox',
                reposition:true,
                scalePhotos:true,
                scrolling:false,
                previous:'<i class="ace-icon fa fa-arrow-left"></i>',
                next:'<i class="ace-icon fa fa-arrow-right"></i>',
                close:'&times;',
                current:'{current} of {total}',
                maxWidth:'100%',
                maxHeight:'100%',
                onOpen:function(){
                    $overflow = document.body.style.overflow;
                    document.body.style.overflow = 'hidden';
                },
                onClosed:function(){
                    document.body.style.overflow = $overflow;
                },
                onComplete:function(){
                    $.colorbox.resize();
                }
            };

            $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
            $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon

            $(document).one('ajaxloadstart.page', function(e) {
                $('#colorbox, #cboxOverlay').remove();
           });
        })
    </script>
@endsection
