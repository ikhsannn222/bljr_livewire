@if(flash()->message)
    <div>
        <div class="alert d-flex align-items-center alert-{{ flash()->class ?? 'success' }}" role="alert">
            @if (flash()->class == 'warning' || flash()->class == 'danger')
                <i class="bi me-2 bi-exclamation-triangle-fill"></i>
            @elseif (flash()->class == 'info')
                <i class="bi me-2 bi-exclamation-circle-fill"></i>
            @elseif (flash()->class == 'success')
                <i class="bi me-2 bi-check-circle-fill"></i>
            @endif
            {{ flash()->message }}
        </div>
    </div>
@endif
