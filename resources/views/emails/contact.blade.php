@if(isset($data) && !empty($data))
    <h2>رسالة من: {{ $data['name'] }}</h2>
    <p><strong>البريد:</strong> {{ $data['email'] }}</p>
    <p><strong>الرسالة:</strong><br>{{ $data['message'] }}</p>
@else
    <p>لا توجد بيانات.</p>
@endif