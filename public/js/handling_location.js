
    $('#get-current-location').click(function(){
        if (localStorage.getItem('regionDefault') === null) {
            $.ajax({
                method : "GET",
                url: "https://ipfind.co/me?auth={{ $key }}",
                dataType: "json",
                beforeSend: function() {
                    $('.ajax_waiting').addClass("loading");
                },
                success: function(response) {
                    $('.ajax_waiting').removeClass("loading");
                    localStorage.setItem("HomeSearch", response.region); 
                    localStorage.setItem("regionDefault", response.region); 
                    localStorage.setItem("latDefault", response.latitude);
                    localStorage.setItem("lngDefault", response.longitude);
                    $('#pac-input').val(response.region);

                    $.ajaxSetup(
                        {
                          headers:
                          {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var data = {
                        lat: response.latitude,
                        lng: response.longitude,
                    };
                    $.ajax({
                        method : "POST",
                        url: "{{ route('createdSession') }}",
                        data: data,
                        success: function(response) {
                            //window.location.href = "{{ url('/') }}/current?search=" + $('#pac-input').val() + "&lat=" + response.latitude + "&lng=" + response.longitude;
                        },
                        error: function(data) {
                            console.log('Error:', data);
                        }
                    });

                },
                error: function(data) {
                    $('.ajax_waiting').removeClass("loading");
                    console.log('Error:', data);
                }
            });
        }else{
            var regionDefault = localStorage.getItem('regionDefault');
            localStorage.setItem("HomeSearch", regionDefault); 
            $('#pac-input').val(regionDefault);
            $.ajaxSetup(
                {
                  headers:
                  {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var data = {
                lat: localStorage.getItem('latDefault'),
                lng: localStorage.getItem('lngDefault'),
            };

            $.ajax({
                method : "POST",
                url: "{{ route('createdSession') }}",
                data: data,
                success: function(response) {
                    window.location.href = "{{ url('/') }}/current?search=" + $('#pac-input').val() + "&lat=" + lat + "&lng=" + lng;
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            })
        }

    });

    if (localStorage.getItem('HomeSearch') === null) {
        $('#get-current-location').click();
    }else{
        if($('#pac-input').val().trim().length == 0){
            var homeSearch = localStorage.getItem('HomeSearch');
            $('#pac-input').val(homeSearch);
        }
    }