@csrf
<div class="mb-3">
    <label for="label" class="form-label">Nom</label>
    <input type="text" name="nom" id="label" class="form-control" required
        value="{{ old('nom', $participant->nom) }}">
    @error('nom')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control" required
        value="{{ old('email', $participant->email) }}">
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="tel" class="form-label">Téléphone</label>
    <input type="text" name="tel" id="tel" class="form-control"
        value="{{ old('tel', $participant->tel) }}">
    @error('tel')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" name="age" id="age" class="form-control" required
        value="{{ old('age', $participant->age) }}">
    @error('age')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <span>Status</span>
    <div class="d-flex">
        <div class="form-check me-5">
            <input type="radio" name="status" id="electeur" class="form-check-input" value="e"
                @checked(old('status', $participant->status) === 'e') required>
            <label for="electeur" class="form-check-label">Electeur</label>
        </div>
        <div class="form-check">
            <input type="radio" name="status" id="candidat" class="form-check-input" value="c"
                @checked(old('status', $participant->status) === 'c') required>
            <label for="candidat" class="form-check-label">Candidat</label>
        </div>
    </div>

    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <span>Sexe</span>
    <div class="d-flex">
        <div class="form-check me-5">
            <input type="radio" name="sexe" id="sexe_m" class="form-check-input" value="m"
                @checked(old('sexe', $participant->sexe) === 'm') required>
            <label for="sexe_m" class="form-check-label">Homme</label>
        </div>
        <div class="form-check">
            <input type="radio" name="sexe" id="sexe_f" class="form-check-input" value="f"
                @checked(old('sexe', $participant->sexe) === 'f') required>
            <label for="sexe_f" class="form-check-label">Femme</label>
        </div>
    </div>

    @error('sexe')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="mb-3">
    <label for="region" class="form-label">Region</label>
    <select name="id_region" id="region" class="form-select" required>
        @foreach ($regions as $region)
            <option value="{{ $region->id }}" @selected(old('id_region', $participant->id_region) == $region->id)>{{ $region->label }}</option>
        @endforeach
    </select>
    @error('region')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Enregistrer</button>

</div>
