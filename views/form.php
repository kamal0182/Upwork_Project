<div class="container mt-5">
  <h2>Project Details Form</h2>
  <form>
    <!-- Title -->
    <div class="mb-3">
      <label for="title" class="form-label">Project Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter project title" required>
    </div>

    <!-- Description -->
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" rows="4" placeholder="Provide a detailed description of the project" required></textarea>
    </div>

    <!-- Budget -->
    <div class="mb-3">
      <label for="budget" class="form-label">Budget</label>
      <input type="number" class="form-control" id="budget" placeholder="Enter project budget" required>
    </div>

    <!-- Duration -->
    <div class="mb-3">
      <label for="duration" class="form-label">Duration (in days)</label>
      <input type="number" class="form-control" id="duration" placeholder="Enter project duration" required>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
