 const students = [
            {name: "Sakshi kaur", branch: "CSE", cgpa: "9.0"},
            {name: "Ritika", branch: "CSE", cgpa: "9.64"},
            {name: "yashu", branch: "CSE", cgpa: "8.5"},
            {name: "paridhi", branch: "CSE", cgpa: "9.0"},
            {name: "vanika", branch: "CSE", cgpa: "9.0"},
            {name: "poorwansh", branch: "CSE", cgpa: "9.7"},
            {name: "sujal", branch: "CSE", cgpa: "8.5"},
            {name: "vidhi", branch: "CSE", cgpa: "9.0"}
        ];

        // 2. Loop se HTML Cards generate karna
        let html = "";
        for (let i = 0; i < students.length; i++) {
            html += `
            <div class="col-md-4 card-item">
                <div class="card shadow h-100" style="border: 1px solid #ff99cc;">
                    <div class="card-body text-center">
                        <h4 class="text-capitalize" style="color: #2c52b4;">${students[i].name}</h4>
                        
                        <button class="btn btn-primary btn-sm mt-2 toggle-btn" style="background-color: #ff66b3; border: none;">
                            Show Details
                        </button>

                        <div class="details mt-3" style="display: none; background-color: #fff0f5; padding: 10px; border-radius: 5px;">
                            <p class="mb-1"><strong>Branch: </strong>${students[i].branch}</p>
                            <p class="mb-0"><strong>CGPA: </strong>${students[i].cgpa}</p>
                        </div>
                    </div>
                </div>
            </div>`;
        }
        document.getElementById('container').innerHTML = html;
        $(document).ready(function() {

            // Show / Hide Details Button Click
            $(document).on("click", ".toggle-btn", function() {
                // Button ke pas wale "details" div ko dhundho aur slide toggle karo
                let detailsDiv = $(this).siblings(".details");
                detailsDiv.slideToggle();

                // Button ka naam badlo (Show hai to Hide, Hide hai to Show)
                if ($(this).text().trim() === "Show Details") {
                    $(this).text("Hide Details");
                } else {
                    $(this).text("Show Details");
                }
            });

            // Live Search Student Logic
            $("#search").on("keyup", function() {
                let val = $(this).val().toLowerCase(); // Input box me jo type hua

                $(".card-item").each(function() {
                    let name = $(this).find("h4").text().toLowerCase(); // Card ka naam

                    // Agar naam me wo akshar hai jo search hua hai, to dikhao warna chupao
                    if (name.includes(val)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

        });
    
