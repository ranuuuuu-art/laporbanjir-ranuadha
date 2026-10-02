<div class="laporan-card">
    <h3>{{ $data['nama'] }}</h3>

    <p>
        <strong>Lokasi:</strong>
        {{ $data['lokasi'] }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $data['tinggi'] }} cm
    </p>

    @if ($data['tinggi'] < 30)
        <p><strong>Status:</strong> Waspada</p>
    @elseif ($data['tinggi'] <= 70)
        <p><strong>Status:</strong> Siaga</p>
    @else
        <p><strong>Status:</strong> Awas</p>
    @endif
</div>