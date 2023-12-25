<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live-Search</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">

            <div class="col-lg-6">
                <form action="{{ route('search') }}" method="GET" id="live-search-form">
                    @csrf
                    <input type="number" name="query" id="search-input" placeholder="ป้อนรหัสไปรษณีย์"
                        class="mb-5">
                </form>
                <div id="search-results"></div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script type="text/javascript">
        document.getElementById('live-search-form').addEventListener('submit', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มไปยังเซิร์ฟเวอร์ก่อน

            var query = document.getElementById('search-input').value.trim();

            if (query.length < 5) {
                Swal.fire({
                    icon: 'error',
                    title: 'ผิดพลาด',
                    text: 'กรุณากรอกรหัสไปรษณีย์ที่มีอย่างน้อย 5 ตัว',
                });
            } else {
                // ทำการส่งคำค้นหาไปยังเซิร์ฟเวอร์
                this.submit();
            }
        });
        $(document).ready(function() {
            $('#search-input').on('input', function() {
                var query = $(this).val();

                if (query.length >= 2) { // เมื่อคำค้นหามีอย่างน้อย 2 ตัวอักษร
                    $.ajax({
                        url: "{{ route('search') }}",
                        method: "GET",
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#search-results').html(data);
                        }
                    });
                } else {
                    $('#search-results').empty();
                }
            });
        });
    </script>

</body>

</html>
