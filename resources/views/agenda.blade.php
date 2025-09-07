@extends('layouts.app')

@section('title', 'Agenda Kegiatan')

@push('styles')
<style>
    /* Style untuk div kalender utama */
    #calendar {
        max-width: 100%;
        margin: 0 auto;
    }
    .fc-event {
        background-color: #10B981;
        border-color: #059669;
        cursor: pointer; /* Menambahkan cursor pointer pada event */
    }
    .fc-day-today {
        background-color: #EFF6FF !important;
    }

    /* Style untuk Kalender Statis/Widget */
    .static-calendar {
        font-family: sans-serif;
        border-radius: 0.5rem;
        background-color: #fff;
        padding: 1.5rem;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        border: 1px solid #e5e7eb;
    }
    .static-calendar .month {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.25rem;
    }
    .static-calendar .month h2 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1f2937;
    }
    .static-calendar .weekdays {
        display: flex;
        color: #6b7280;
        font-size: 0.75rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
    }
    .static-calendar .days {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 0.25rem;
    }
    .static-calendar .weekdays div,
    .static-calendar .days div {
        width: 100%;
        text-align: center;
        padding: 0.5rem 0;
    }
    .static-calendar .days div {
        cursor: default;
        transition: background-color 0.2s;
        border-radius: 9999px; /* Membuatnya bulat */
    }
    .static-calendar .days .today {
        background-color: #3B82F6; /* Warna biru */
        color: white;
        font-weight: bold;
    }
    .static-calendar .days .prev-date,
    .static-calendar .days .next-date {
        color: #d1d5db; /* Warna abu-abu pudar */
    }

    /* Style untuk Jam Digital */
    .clock-widget {
        background-color: #1f2937; /* Warna gelap */
        color: #fff;
        padding: 1.5rem;
        border-radius: 0.5rem;
        text-align: center;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    }
    .clock-widget #date {
        font-size: 1.125rem;
        font-weight: 600;
        letter-spacing: 1px;
    }
    .clock-widget #time {
        font-size: 2.25rem;
        font-weight: 700;
        margin-top: 0.25rem;
    }
</style>
@endpush

@section('content')
<main>
    {{-- Bagian Header Halaman --}}
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

    {{-- Bagian Konten Utama: Kalender dan Daftar Agenda --}}
    <section class="py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            {{-- Tata letak diubah menjadi 4 kolom untuk fleksibilitas --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                
                {{-- Kolom Kiri: Widget Kalender Tetap & Jam --}}
                <div class="lg:col-span-1 space-y-8">
                    {{-- Widget Jam Digital --}}
                    <div class="clock-widget">
                        <div id="date"></div>
                        <div id="time"></div>
                    </div>
                    {{-- Widget Kalender Statis --}}
                    <div class="static-calendar">
                        <div class="month">
                            <h2 id="month-year"></h2>
                        </div>
                        <div class="weekdays">
                            <div>Min</div>
                            <div>Sen</div>
                            <div>Sel</div>
                            <div>Rab</div>
                            <div>Kam</div>
                            <div>Jum</div>
                            <div>Sab</div>
                        </div>
                        <div class="days" id="calendar-days"></div>
                    </div>
                </div>

                {{-- Kolom Tengah: Kalender Interaktif --}}
                <div class="lg:col-span-2 bg-white p-4 sm:p-6 rounded-xl shadow-lg border border-gray-200">
                    <div id='calendar'></div>
                </div>

                {{-- Kolom Kanan: Daftar Agenda Mendatang --}}
                <div class="lg:col-span-1">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Agenda Mendatang</h3>
                    <div class="space-y-6">
                        @forelse ($agendas as $agenda)
                        <div class="bg-white p-5 rounded-lg shadow-md border-l-4 border-green-500 hover:shadow-lg transition-shadow duration-200">
                            <p class="text-sm text-gray-500 mb-1 font-semibold">
                                {{ $agenda->tanggal_mulai->isoFormat('D MMMM YYYY') }}
                                @if($agenda->tanggal_selesai && $agenda->tanggal_selesai->ne($agenda->tanggal_mulai))
                                    - {{ $agenda->tanggal_selesai->isoFormat('D MMMM YYYY') }}
                                @endif
                            </p>
                            <h4 class="font-bold text-gray-900">{{ $agenda->judul }}</h4>
                            @if($agenda->lokasi)
                            <p class="text-xs text-gray-600 mt-1 flex items-center">
                                <svg class="inline-block w-3 h-3 mr-1.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                {{ $agenda->lokasi }}
                            </p>
                            @endif
                        </div>
                        @empty
                        <div class="bg-white p-5 rounded-lg text-center text-gray-500">
                            <p>Tidak ada agenda mendatang.</p>
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
{{-- 1. Load Pustaka FullCalendar --}}
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> {{-- Pustaka untuk popup --}}


{{-- 2. Inisialisasi Kalender & Widget --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // =================================================================
        // SKRIP UNTUK KALENDER INTERAKTIF (FULLCALENDAR)
        // =================================================================
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'id',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,listWeek'
            },
            events: {!! $events_json !!},
            eventClick: function(info) {
                // Menampilkan popup saat event diklik
                Swal.fire({
                    title: info.event.title,
                    html: `<b>Mulai:</b> ${info.event.start.toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' })}`,
                    icon: 'info',
                    confirmButtonText: 'Tutup'
                });
            },
            eventDidMount: function(info) {
                if (info.event.title) {
                    info.el.setAttribute('title', info.event.title);
                }
            }
        });
        calendar.render();

        // =================================================================
        // SKRIP UNTUK WIDGET JAM & KALENDER STATIS
        // =================================================================
        const dateElement = document.getElementById('date');
        const timeElement = document.getElementById('time');
        const monthYearElement = document.getElementById('month-year');
        const calendarDaysElement = document.getElementById('calendar-days');
        
        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        const dayNames = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        
        // Fungsi untuk mengupdate jam setiap detik
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            
            dateElement.textContent = `${dayNames[now.getDay()]}, ${now.getDate()} ${monthNames[now.getMonth()]} ${now.getFullYear()}`;
            timeElement.textContent = `${hours}:${minutes}:${seconds}`;
        }

        // Fungsi untuk membuat kalender statis
        function renderStaticCalendar() {
            const now = new Date();
            const year = now.getFullYear();
            const month = now.getMonth();
            const today = now.getDate();

            monthYearElement.textContent = `${monthNames[month]} ${year}`;

            const firstDayOfMonth = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            calendarDaysElement.innerHTML = ''; // Kosongkan hari sebelumnya

            // Tambahkan sel kosong untuk hari sebelum tanggal 1
            for (let i = 0; i < firstDayOfMonth; i++) {
                calendarDaysElement.innerHTML += `<div></div>`;
            }

            // Tambahkan semua hari dalam bulan ini
            for (let i = 1; i <= daysInMonth; i++) {
                let dayCell = document.createElement('div');
                dayCell.textContent = i;
                if (i === today) {
                    dayCell.classList.add('today'); // Tandai hari ini
                }
                calendarDaysElement.appendChild(dayCell);
            }
        }
        
        // Panggil fungsi pertama kali
        updateClock();
        renderStaticCalendar();

        // Set interval untuk mengupdate jam setiap detik
        setInterval(updateClock, 1000);
    });
</script>
@endpush