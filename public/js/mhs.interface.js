pony.add(function() {
    pony.lesson('watch', function(){
        pony.fetch("/derpy/watch/"+$(this).data('relation')+'/'+$(this).data('id'), {size: $(this).data('size')}, function(data){
            btns = $('.watch-'+data.relation+'-'+data.itemid);
            btns.removeClass('btn-labeled');
            if(data.labeled) {
                btns.addClass('btn-labeled');
            }
            btns.html(data.content);
            if(data.relation == 'home') {
                if(data.count == 0) {
                    $('.watch-'+data.relation+'-'+data.itemid+'-count').text('Nobody watching');
                }else if(data.count == 1){
                    $('.watch-'+data.relation+'-'+data.itemid+'-count').text(data.count+' user watching');
                }else{
                    $('.watch-'+data.relation+'-'+data.itemid+'-count').text(data.count+' users watching');
                }
            }else{
                $('.watch-'+data.relation+'-'+data.itemid+'-count').text(data.count);
            }
            if(data.status == 'off') {
                $('.watch-'+data.relation+'-'+data.itemid+'-unwatch-remove').slideUp(1000, function() {
                    $(this).remove();
                    if($('.watch-'+data.relation+'-unwatch-remove').length == 0) {
                        $('.watch-'+data.relation+'-all-unwatch-remove').remove();
                        $('.watch-'+data.relation+'-no-results').removeClass('hidden');
                    }
                });
            }
        });
        return false;
    });
    pony.lesson('kudos', function(){
        pony.fetch("/derpy/kudos/"+$(this).data('relation')+'/'+$(this).data('id'), {size: $(this).data('size')}, function(data){
            btns = $('.kudos-'+data.relation+'-'+data.itemid);
            btns.removeClass('btn-labeled');
            if(data.labeled) {
                btns.addClass('btn-labeled');
            }
            btns.html(data.content);
        });
        return false;
    });
    $(document).on('click', '[data-action="watch"]', pony.lesson('watch'));
    $(document).on('click', '[data-action="kudos"]', pony.lesson('kudos'));

    $('[data-toggle="tooltip"]').tooltip();
});