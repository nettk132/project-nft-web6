<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            </div>
        </div>
    </div>
</x-app-layout>
<script>
    // รอ 3 วินาทีหลังจากโหลดหน้าเว็บแล้วเปิดหน้า Order โดยอัตโนมัติ
    setTimeout(function() {
        window.location.href = "{{ route('order') }}";
    }, 3000); // 3 วินาที (3000 มิลลิวินาที)
</script>
