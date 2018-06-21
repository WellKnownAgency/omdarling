<script language="JavaScript" type="text/javascript" src="{!! asset('/js/instafeed.js') !!}"></script>
<script language="JavaScript" type="text/javascript" src="{!! asset('/js/jquery.min.js') !!}"></script>
<script language="JavaScript" type="text/javascript" src="{!! asset('/js/main.js') !!}"></script>
<script language="JavaScript" type="text/javascript" src="{!! asset('/js/jquery.easing.min.js') !!}"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script language="JavaScript" type="text/javascript" src="{!! asset('/js/app.js') !!}"></script>
<script>

    var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.share > a', function(e){

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });
</script>
