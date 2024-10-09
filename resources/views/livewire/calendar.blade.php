<div>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <div wire:ignore id='calendar'></div>

    <script>
        document.addEventListener('livewire:initialized', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        timeZone: 'UTC',
        editable: true,
        selectable: true,
        events: @json($events), 

        
        select: function(data) {
            var event_name = prompt('Event Name:');
            if (!event_name) {
                return; 
            }

          
            var startDate = data.start.toISOString().replace('T', ' ').substring(0, 19);  // Example: 2024-10-13 14:30:00
            var endDate = data.end ? data.end.toISOString().replace('T', ' ').substring(0, 19) : startDate;

            
            console.log("Start Date:", startDate, "End Date:", endDate);

           
            @this.newEvent(event_name, startDate, endDate)
                .then(function(id) {
                   
                    calendar.addEvent({
                        id: id,
                        title: event_name,
                        start: data.startStr, 
                        end: data.endStr     
                    });
                    calendar.unselect(); 
                });
        },

      
        eventDrop: function(data) {
            var startDate = data.event.startStr;  
            var endDate = data.event.endStr || data.event.startStr; 
           
            @this.updateEvent(
                data.event.id,
                data.event.title,
                startDate,
                endDate
            ).then(function() {
                alert('Event moved successfully');
            });
        }
    });

   
    calendar.render();
});

    </script>
    
</div>