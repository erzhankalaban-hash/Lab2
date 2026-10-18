<!-- Поле телефону -->
<div class="mb-3">
    <label for="phone" class="form-label">Номер телефону</label>
    <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
    @error('phone')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Поле дати -->
<div class="mb-3">
    <label for="date" class="form-label">Бажана дата візиту</label>
    <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
    @error('date')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
