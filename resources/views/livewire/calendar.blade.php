<div>
    <style>
        /* Container styling for responsiveness */
        #calendar {
            width: 100%;
            max-width: 800px; /* Set max width */
            margin: auto;
        }
    
        /* FullCalendar header toolbar */
        .fc-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 5px;
        }
    
        .fc-toolbar-title {
            font-size: 1.2rem; /* Adjust title size */
            text-align: center;
            flex: 1;
        }
    
        .fc-button {
            font-size: 0.9rem;
            padding: 5px 10px;
        }
    
        /* Adjust the size of the day numbers */
        .fc-daygrid-day-number {
            font-size: 1rem; /* Adjust the number size */
            font-weight: bold;
            color: #333;
        }
    
        /* Adjust the size of event titles */
        .fc-event-title {
            font-size: 0.9rem; /* Smaller font size for events */
        }
    
        /* Adjust day cell size */
        .fc-daygrid-day {
            min-height: 50px; /* Minimum height for day cells */
        }
    
        /* Adjust font size for the weekdays (Mon, Tue, etc.) */
        .fc-col-header-cell-cushion {
            font-size: 0.95rem;
            font-weight: bold;
            color: #444;
        }
    
        /* Optional: Reduce padding and size for smaller screens */
        @media (max-width: 768px) {
            .fc-toolbar-title {
                font-size: 1rem; /* Smaller title */
            }
    
            .fc-button {
                font-size: 0.8rem;
                padding: 3px 8px;
            }
    
            .fc-daygrid-day-number {
                font-size: 0.85rem; /* Smaller day numbers */
            }
    
            .fc-event-title {
                font-size: 0.75rem; /* Smaller events */
            }
        }
    </style>
    
    
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