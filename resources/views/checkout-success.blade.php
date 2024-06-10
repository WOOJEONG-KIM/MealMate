@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100">
    <div class="container mx-auto px-4 mt-8">
        <div class="bg-white shadow-md raounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold my-4">Payment Successful</h2>
            <p class="text-gray-700">Thank you for your purchase! Your payment has been processed successfully.</p>
            <p class="text-gray-700">You will be redirected to the orders page in <span id="countdown">3</span> seconds.</p>
        </div>
    </div>

    <script>
        function countdown() {
            var seconds = 3; 
            var countdownElement = document.getElementById('countdown');

            var countdownInterval = setInterval(function() {
                seconds--;
                countdownElement.textContent = seconds; 
                
                if (seconds <= 0) {
                    clearInterval(countdownInterval);
                    window.location.href = '{{ route('orders.index') }}'; // Redirect to orders page
                }
            }, 1000); 
        }

        countdown();
    </script>
</body>

</html>
@endsection
