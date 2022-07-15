<div class="container" style="padding: 1rem;">
    <p>
        You've got new mail from {{ $contact->name }} ({{ $contact->email }}) via <b>Contact Form</b>
    </p>

    <p>Phone Number: {{ $contact->phone }}</p>
    <p>
        <strong>Message:</strong> {{ $contact->message }}
    </p>
</div>
