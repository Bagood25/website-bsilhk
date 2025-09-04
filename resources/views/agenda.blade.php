@extends('layouts.app')

@section('title', 'Agenda Kegiatan')

@push('styles')
<style>
    /* Styling untuk kalender agar lebih jelas */
    .calendar-day.has-event {
        background-color: #ECFDF5; /* bg-green-50 */
        color: #065F46; /* text-green-800 */
        font-weight: bold;
        border-radius: 9999px; /* rounded-full */
    }
    .calendar-day.today {
        background-color: #3B82F6; /* bg-blue-500 */
        color: white;
        border-radius: 9999px; /* rounded-full */
    }
    .calendar-day:not(.empty):hover {
        background-color: #F3F4F6; /* bg-gray-100 */
        border-radius: 9999px;
    }
</style>
@endpush

@section('content')
<main>
    <section class="relative text-white bg-cover bg-center" style="background-image: url('{{ asset('images/background hutan.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-6 py-16 text-center relative z-10">
            <h1 class="text-4xl font-bold text-white">Agenda Kegiatan</h1>
            <p class="mt-2 text-lg text-gray-300">
                <a href="{{ url('/') }}" class="hover:text-white transition-colors duration-200">Beranda</a>
                <span class="mx-2">></span>
                <span>Agenda</span>
            </p>
        </div>
    </section>

    <section class="py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                
                <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                    <div class="flex items-center justify-between mb-4">
                        <button id="prev-month" class="p-2 rounded-full hover:bg-gray-100 focus:outline-none" aria-label="Bulan Sebelumnya">&larr;</button>
                        <h2 id="month-year" class="text-xl font-bold text-gray-800"></h2>
                        <button id="next-month" class="p-2 rounded-full hover:bg-gray-100 focus:outline-none" aria-label="Bulan Berikutnya">&rarr;</button>
                    </div>
                    <div id="calendar-grid" class="grid grid-cols-7 gap-2 text-center font-semibold text-gray-600 text-sm mb-2">
                        {{-- Header Hari (Minggu, Senin, ...) --}}
                    </div>
                    <div id="calendar-days" class="grid grid-cols-7 gap-2">
                        {{-- Tanggal akan di-generate oleh JavaScript --}}
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Daftar Agenda</h3>
                    <div class="space-y-6">
                        @forelse ($agendas as $agenda)
                        <div class="bg-white p-5 rounded-lg shadow-md border-l-4 border-green-500">
                            <p class="text-sm text-gray-500 mb-1 font-semibold">
                                {{-- Menampilkan rentang tanggal --}}
                                {{ $agenda->tanggal_mulai->isoFormat('D MMMM YYYY') }}
                                @if($agenda->tanggal_selesai && $agenda->tanggal_selesai->ne($agenda->tanggal_mulai))
                                    - {{ $agenda->tanggal_selesai->isoFormat('D MMMM YYYY') }}
                                @endif
                            </p>
                            <h4 class="font-bold text-gray-900">{{ $agenda->judul }}</h4>
                            @if($agenda->lokasi)
                            <p class="text-xs text-gray-600 mt-1">
                                <svg class="inline-block w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                {{ $agenda->lokasi }}
                            </p>
                            @endif
                        </div>
                        @empty
                        <div class="bg-white p-5 rounded-lg text-center text-gray-500">
                            <p>Tidak ada agenda mendatang yang dijadwalkan.</p>
                        </div>
                        @endforelse
                    </div>
                     <div class="mt-8">
                        {{ $agendas->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const monthYearEl = document.getElementById('month-year');
        const prevMonthBtn = document.getElementById('prev-month');
        const nextMonthBtn = document.getElementById('next-month');
        const calendarGridEl = document.getElementById('calendar-grid');
        const calendarDaysEl = document.getElementById('calendar-days');
        
        // Memastikan data events ada dan valid
        const eventsJson = {!! $events_json !!};
        const events = Array.isArray(eventsJson) ? eventsJson : [];
        let currentDate = new Date();

        function getDatesInRange(startDate, endDate) {
            const date = new Date(startDate.getTime());
            // Set ke awal hari untuk menghindari masalah timezone
            date.setUTCHours(0, 0, 0, 0);
            const end = new Date(endDate.getTime());
            end.setUTCHours(0, 0, 0, 0);

            const dates = [];
            while (date < end) {
                dates.push(new Date(date).toISOString().split('T')[0]);
                date.setDate(date.getDate() + 1);
            }
            return dates;
        }

        const eventDates = new Set();
        events.forEach(event => {
            if (event.start && event.end) {
                 getDatesInRange(new Date(event.start), new Date(event.end)).forEach(date => eventDates.add(date));
            }
        });

        function renderCalendar() {
            currentDate.setDate(1); // Mulai dari tanggal 1 setiap render
            const year = currentDate.getFullYear();
            const month = currentDate.getMonth();
            const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            
            monthYearEl.textContent = `${monthNames[month]} ${year}`;
            
            calendarGridEl.innerHTML = '';
            calendarDaysEl.innerHTML = '';

            const dayNames = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];
            dayNames.forEach(day => {
                calendarGridEl.innerHTML += `<div class="text-center font-semibold text-gray-600 text-sm">${day}</div>`;
            });

            const firstDayOfMonth = currentDate.getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            for (let i = 0; i < firstDayOfMonth; i++) {
                calendarDaysEl.innerHTML += `<div class="empty"></div>`;
            }

            const today = new Date();
            for (let day = 1; day <= daysInMonth; day++) {
                const dayEl = document.createElement('div');
                dayEl.className = 'calendar-day text-center p-2 text-sm';
                dayEl.textContent = day;
                
                const currentDayStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;

                if (eventDates.has(currentDayStr)) {
                    dayEl.classList.add('has-event');
                }

                if (day === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                    dayEl.classList.add('today');
                }
                
                calendarDaysEl.appendChild(dayEl);
            }
        }

        prevMonthBtn.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
        });

        nextMonthBtn.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
        });

        renderCalendar();
    });
</script>
@endpush