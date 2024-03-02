function submitData(nft_id) {
    var formData = new FormData();
    formData.append('nft_id', nft_id);
    formData.append('user_id', '{{ Auth::id() }}');

    // ส่งคำขอ POST ไปยังเซิร์ฟเวอร์ Laravel ผ่าน AJAX
    $.ajax({
        type: "POST",
        url: "{{ route('orderdata') }}",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            alert('การสั่งซื้อสำเร็จ!');
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}
function ch(){
    console.log('ผ่าน');
}
