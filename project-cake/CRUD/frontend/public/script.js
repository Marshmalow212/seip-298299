var activeLink = document.getElementsByClassName("nav-link");

jQuery(function(){
    $(activeLink).on('click',function(){
        var currentActive = $('.nav-link.active').removeClass('active');
        $(this).addClass('active');
        console.log(currentActive);
        
    });

    // var countrySelect = document.getElementsByTagName('select');
    // $(countrySelect).on('click',function () {
    //    var selectedValue = $(this.target);
    //    console.log(selectedValue);
    // });

});
