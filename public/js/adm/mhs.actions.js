pony.add(function() {
    pony.lesson('suspend', function() {
        var relation = $(this).data('relation');
        var objid = $(this).data('id');
        $.post("/luna/derpy/action/suspend/"+$(this).data('relation')+'/'+$(this).data('id'), { _token: $('meta[name=formtoken]').attr('content') }).done(function(data) {
            if(data.data.success) {
                var buttontext = '';
                
                if(data.data.suspended) {
                    switch(relation) {
                        case 'company':
                            buttontext = 'Enable company';
                            break;
                        case 'company-user':
                            buttontext = 'Unsuspend link';
                            break;
                        default:
                            buttontext = 'Unsuspend';
                    }
                
                    $('[data-action="suspend"][data-id="'+objid+'"][data-relation="'+relation+'"]').text(buttontext);
                }else{
                    switch(relation) {
                        case 'company':
                            buttontext = 'Disable company';
                            break;
                        case 'company-user':
                            buttontext = 'Suspend link';
                            break;
                        default:
                            buttontext = 'Suspend';
                    }
                
                    $('[data-action="suspend"][data-id="'+objid+'"][data-relation="'+relation+'"]').text(buttontext);
                }
            }
        });
        return false;
    });
    pony.lesson('verify', function() {
        var relation = $(this).data('relation');
        var objid = $(this).data('id');
        $.post("/luna/derpy/action/verify/"+$(this).data('relation')+'/'+$(this).data('id'), { _token: $('meta[name=formtoken]').attr('content') }).done(function(data) {
            if(data.data.success) {
                var buttontext = '';
                
                if(data.data.verified) {
                    switch(relation) {
                        case 'company':
                            buttontext = 'Unverify company';
                            break;
                        default:
                            buttontext = 'Unverify';
                    }
                
                    $('[data-action="verify"][data-id="'+objid+'"][data-relation="'+relation+'"]').removeClass('btn-metis-3').addClass('btn-metis-5').text(buttontext);
                }else{
                    switch(relation) {
                        case 'company':
                            buttontext = 'Verify company';
                            break;
                        default:
                            buttontext = 'Verify';
                    }
                
                    $('[data-action="verify"][data-id="'+objid+'"][data-relation="'+relation+'"]').removeClass('btn-metis-5').addClass('btn-metis-3').text(buttontext);
                }
            }
        });
        return false;
    });

	pony.bind('click', '[data-action="suspend"]', pony.lesson('suspend'));
	pony.bind('click', '[data-action="verify"]', pony.lesson('verify'));
});