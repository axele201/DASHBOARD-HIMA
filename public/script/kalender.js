$(function () {
    function ini_events(ele) {
        ele.each(function () {
            var eventObject = {
                title: $.trim($(this).text())
            };

            $(this).data('eventObject', eventObject);

            $(this).draggable({
                zIndex: 1070,
                revert: true,
                revertDuration: 0
            });
        });
    }

    ini_events($('#external-events div.external-event'));

    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function (eventEl) {
            return {
                title: eventEl.innerText,
                backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
            };
        }
    });

    var calendar = new Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        themeSystem: 'bootstrap',
        events: JSON.parse(localStorage.getItem('calendarEvents')) || [],
        editable: true,
        droppable: true,
        drop: function (info) {
            var eventTitle = info.draggedEl.innerText.trim();
            var existingEvents = calendar.getEvents();
            var eventExists = existingEvents.some(function (event) {
                return event.title.toLowerCase() === eventTitle.toLowerCase();
            });

            if (!eventExists) {
                calendar.addEvent({
                    title: eventTitle,
                    start: info.date,
                    backgroundColor: window.getComputedStyle(info.draggedEl, null).getPropertyValue('background-color'),
                    borderColor: window.getComputedStyle(info.draggedEl, null).getPropertyValue('background-color'),
                    textColor: window.getComputedStyle(info.draggedEl, null).getPropertyValue('color'),
                });

                if (checkbox.checked) {
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
                updateEventSelect();
            } else {
                alert('Acara dengan judul ini sudah ada!');
            }
        }
    });

    calendar.render();

    var currColor = '#3c8dbc';
    $('#color-chooser > li > a').click(function (e) {
        e.preventDefault();
        currColor = $(this).css('color');
        $('#add-new-event').css({
            'background-color': currColor,
            'border-color': currColor
        });
    });

    $('#add-new-event').click(function (e) {
        e.preventDefault();
        var val = $('#new-event').val().trim();
        if (val.length == 0) {
            return;
        }

        var events = calendar.getEvents();
        var eventExists = events.some(function (event) {
            return event.title.toLowerCase() === val.toLowerCase();
        });

        if (eventExists) {
            alert('Acara dengan judul ini sudah ada!');
            return;
        }

        var event = $('<div />');
        event.css({
            'background-color': currColor,
            'border-color': currColor,
            'color': '#fff'
        }).addClass('external-event');
        event.text(val);
        $('#external-events').prepend(event);

        ini_events(event);
        $('#new-event').val('');

        updateEventSelect();
    });

    $('#save-events').click(function () {
        var password = prompt("Enter password to save events:");
        if (password === "Admin123") {
            var events = [];
            calendar.getEvents().forEach(function (event) {
                events.push({
                    title: event.title,
                    start: event.start.toISOString(),
                    end: event.end ? event.end.toISOString() : null,
                    backgroundColor: event.backgroundColor,
                    borderColor: event.borderColor,
                });
            });
            localStorage.setItem('calendarEvents', JSON.stringify(events));
            alert('Events have been saved!');
        } else {
            alert('Incorrect password. Events not saved.');
        }
    });

    $('#clear-events').click(function () {
        localStorage.removeItem('calendarEvents');
        location.reload();
    });

    $('#delete-events').click(function () {
        var selectedEventTitle = $('#event-select').val();
        if (selectedEventTitle) {
            var eventToDelete = calendar.getEvents().find(event => event.title === selectedEventTitle);
            if (eventToDelete) {
                eventToDelete.remove();
                alert('Acara "' + selectedEventTitle + '" telah dihapus.');
            } else {
                alert('Acara tidak ditemukan.');
            }
        } else {
            alert('Silakan pilih acara yang ingin dihapus.');
        }
        updateEventSelect();
    });

    function updateEventSelect() {
        var events = calendar.getEvents();
        var $eventSelect = $('#event-select');
        $eventSelect.empty();
        if (events.length === 0) {
            $eventSelect.append('<option>Tidak ada acara</option>');
        } else {
            events.forEach(function (event) {
                $eventSelect.append('<option>' + event.title + '</option>');
            });
        }
    }

    calendar.on('eventAdd', updateEventSelect);
    calendar.on('eventRemove', updateEventSelect);
    updateEventSelect();
});
