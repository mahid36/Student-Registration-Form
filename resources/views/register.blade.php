<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { padding:15px 0; font-family:"Segoe UI", Roboto, Arial, sans-serif; background:#fff; }
    .form-title { font-weight:700; font-size:28px; text-align:center; margin-bottom:10px; letter-spacing:2px; }
    .divider { height:2px; width:50%; background:#222; margin:5px auto 15px; }
    .card { border:none; }
    .form-label { font-weight:500; font-size:14px; }
    .field-box { background:#efefef; border:1px solid #e1e1e1; padding:.4rem; border-radius:3px; }
    .form-control, .form-select { font-size:14px; padding:.3rem .5rem; }
    .row.mb-3 { margin-bottom:10px; }
    .submit-btn { width: 200px; } /* বোতামের প্রস্থ বাড়ানো */
  </style>
</head>
<body>
<div class="container">
  <div class="card shadow-sm">
    <div class="card-header bg-white text-center">
      <div class="form-title">STUDENT REGISTRATION FORM</div>
      <div class="divider mx-auto"></div>
    </div>
    <div class="card-body">
      @if(session('success'))
        <div class="alert alert-success" style="font-size:14px;">{{ session('success') }}</div>
      @endif
      <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <!-- Name & Date of Birth -->
        <div class="row mb-3">
          <div class="col-6 mb-2">
            <label class="form-label" for="name">Name:</label>
            <div class="field-box">
              <input id="name" name="name" type="text" class="form-control border-0 bg-transparent" placeholder="Full name" required>
            </div>
          </div>
          <div class="col-6 mb-2">
            <label class="form-label" for="date_of_birth">DOB:</label>
            <div class="field-box">
              <input id="date_of_birth" name="date_of_birth" type="date" class="form-control border-0 bg-transparent" required>
            </div>
          </div>
        </div>

        <!-- Address & Contact -->
        <div class="row mb-3">
          <div class="col-6 mb-2">
            <label class="form-label" for="address">Address:</label>
            <div class="field-box">
              <textarea id="address" name="address" class="form-control border-0 bg-transparent" rows="1" placeholder="Street, City, ZIP" required></textarea>
            </div>
          </div>
          <div class="col-6 mb-2">
            <label class="form-label" for="contact">Contact:</label>
            <div class="field-box">
              <input id="contact" name="contact" type="tel" class="form-control border-0 bg-transparent" placeholder="+8801XXXXXXXXX" required>
            </div>
          </div>
        </div>

        <!-- Email & Occupation -->
        <div class="row mb-3">
          <div class="col-6 mb-2">
            <label class="form-label" for="email">Email:</label>
            <div class="field-box">
              <input id="email" name="email" type="email" class="form-control border-0 bg-transparent" placeholder="example@mail.com" required>
            </div>
          </div>
          <div class="col-6 mb-2">
            <label class="form-label" for="occupation">Occupation:</label>
            <div class="field-box">
              <input id="occupation" name="occupation" type="text" class="form-control border-0 bg-transparent" placeholder="Occupation">
            </div>
          </div>
        </div>

        <!-- Age, Gender, Civil Status, Citizenship -->
        <div class="row mb-3">
          <div class="col-3 mb-2">
            <label class="form-label" for="age">Age:</label>
            <div class="field-box">
              <input id="age" name="age" type="number" class="form-control border-0 bg-transparent" min="0" placeholder="Age">
            </div>
          </div>
          <div class="col-3 mb-2">
            <label class="form-label" for="gender">Gender:</label>
            <div class="field-box">
              <select id="gender" name="gender" class="form-select border-0 bg-transparent">
                <option value="">Select</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="col-3 mb-2">
            <label class="form-label" for="civil_status">Civil Status:</label>
            <div class="field-box">
              <input id="civil_status" name="civil_status" type="text" class="form-control border-0 bg-transparent" placeholder="S/M">
            </div>
          </div>
          <div class="col-3 mb-2">
            <label class="form-label" for="citizenship">Citizenship:</label>
            <div class="field-box">
              <input id="citizenship" name="citizenship" type="text" class="form-control border-0 bg-transparent" placeholder="Country">
            </div>
          </div>
        </div>

        <!-- Height, Weight, Religion, Language -->
        <div class="row mb-3">
          <div class="col-3 mb-2">
            <label class="form-label" for="height">Height (cm):</label>
            <div class="field-box">
              <input id="height" name="height" type="number" step="0.1" class="form-control border-0 bg-transparent" placeholder="Height">
            </div>
          </div>
          <div class="col-3 mb-2">
            <label class="form-label" for="weight">Weight (kg):</label>
            <div class="field-box">
              <input id="weight" name="weight" type="number" step="0.1" class="form-control border-0 bg-transparent" placeholder="Weight">
            </div>
          </div>
          <div class="col-3 mb-2">
            <label class="form-label" for="religion">Religion:</label>
            <div class="field-box">
              <input id="religion" name="religion" type="text" class="form-control border-0 bg-transparent" placeholder="Religion">
            </div>
          </div>
          <div class="col-3 mb-2">
            <label class="form-label" for="language">Language:</label>
            <div class="field-box">
              <input id="language" name="language" type="text" class="form-control border-0 bg-transparent" placeholder="Language">
            </div>
          </div>
        </div>

        <!-- Parents -->
        <div class="row mb-3">
          <div class="col-6 mb-2">
            <label class="form-label" for="father_name">Father’s Name:</label>
            <div class="field-box">
              <input id="father_name" name="father_name" type="text" class="form-control border-0 bg-transparent" placeholder="Father’s Name">
            </div>
          </div>
          <div class="col-6 mb-2">
            <label class="form-label" for="father_occupation">Father Occ.:</label>
            <div class="field-box">
              <input id="father_occupation" name="father_occupation" type="text" class="form-control border-0 bg-transparent" placeholder="Occupation">
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-6 mb-2">
            <label class="form-label" for="mother_name">Mother’s Name:</label>
            <div class="field-box">
              <input id="mother_name" name="mother_name" type="text" class="form-control border-0 bg-transparent" placeholder="Mother’s Name">
            </div>
          </div>
          <div class="col-6 mb-2">
            <label class="form-label" for="mother_occupation">Mother Occ.:</label>
            <div class="field-box">
              <input id="mother_occupation" name="mother_occupation" type="text" class="form-control border-0 bg-transparent" placeholder="Occupation">
            </div>
          </div>
        </div>

        <!-- Emergency Contact -->
        <div class="row mb-3">
          <div class="col-8 mb-2">
            <label class="form-label" for="emergency_person">Emergency Person:</label>
            <div class="field-box">
              <input id="emergency_person" name="emergency_person" type="text" class="form-control border-0 bg-transparent" placeholder="Emergency Person">
            </div>
          </div>
          <div class="col-4 mb-2">
            <label class="form-label" for="emergency_contact">Contact:</label>
            <div class="field-box">
              <input id="emergency_contact" name="emergency_contact" type="tel" class="form-control border-0 bg-transparent" placeholder="+8801XXXXXXXXX">
            </div>
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary submit-btn">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
