@extends('layouts.view')


@section('content')
    <!--Home Sections-->
    <section id="about" class="about bg-black fix">
        <div class="overlay"></div>
        <!--End off container -->
        <h3>About</h3>
    </section>
    <!--End off Home Sections-->
    <section id="company-info">
        <div class="container">
            <div class="row">
                <div class="main_features fix roomy-70">
                    <div class="header">
                        <h3 class="header-title">@lang('nav.about')</h3>
                        <span class="line"></span>
                    </div>
                    <div class="content">

                        <table>
                            @foreach($infos as $info)
                            <tr>
                                <td class="title">{{$info->{'name_'.Session::get('locale','en')} }}</td>
                                <td class="info_text">{{$info->{'value_'.Session::get('locale','en')} }}</td>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="map-view">

        <div class="container">
            <center>
                <div id="map" style="height: 500px; width: 80%;margin-bottom: 80px;"></div>
            </center>

        </div>

        <script>
            function initMap() {

                var uluru = {lat: 21.0135159, lng: 105.8034948};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiuzeaJy076mvdIjMQo9DHwKeW5I010Y&callback=initMap">
        </script>
    </section>
@endsection
