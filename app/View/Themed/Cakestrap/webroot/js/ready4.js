/*
 * webroot/js/ready.js
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */

// JavaScript Document
jq162 = jQuery.noConflict( true );

jq162(document).ready(function() {

    // page is now ready, initialize the calendar...
    jq162('#calendar').fullCalendar({
        height: 600,
        header: {
            left:   'title',
            center: '',
            right:  'today agendaDay,agendaWeek,month prev,next'
        },
        defaultView: 'month',
        //firstHour: 7,
        //weekMode: 'variable',
        aspectRatio: 1,
        editable: false,
        events: plgFcRooter + "/feed/"+itemVal,
        eventRender: function(event, element) {
            element.qtip({
                content: event.details,
                position: {
                    target: 'mouse',
                    adjust: {
                        x: 10,
                        y: -5
                    }
                },
                style: {
                    name: 'light',
                    tip: 'leftTop'
                }
            });
        },
    })

});
