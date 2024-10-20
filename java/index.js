<script>
    document.querySelector(".submit-btn").addEventListener("click", function (event) {
        event.preventDefault();

        const id = document.getElementById("student-id").value.trim();
        const name = document.getElementById("student-name").value.trim();
        const studentClass = document.getElementById("student-class").value.trim();
        const date = document.getElementById("date").value;
        const time = document.getElementById("time").value;
        const returnDate = document.getElementById("return-date").value;
        const returnTime = document.getElementById("return-time").value;
        const affirmation = document.getElementById("affirmation").checked;

        // Validate all fields
        if (!id || !name || !studentClass || !date || !time || !returnDate || !returnTime || !affirmation) {
            alert("Please fill in all the fields and confirm the Teacher's affirmation.");
            return;
        }

        // If everything is valid, prepare to submit (or call your PHP script later)
        alert("Form submitted successfully!");

        // For actual form submission, PHP integration can be added here
        document.querySelector("form").submit(); // Uncomment this when PHP is ready
    });
</script>
