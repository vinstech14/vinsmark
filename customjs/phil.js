
        document.addEventListener('DOMContentLoaded', function() {
            fetchRegions();

            document.getElementById("regions").addEventListener("change", function() {
                const regionCode = this.value;
                if (regionCode) {
                    fetchProvinces(regionCode);
                } else {
                    clearSelect(document.getElementById("provinces"));
                    clearSelect(document.getElementById("cities"));
                    clearSelect(document.getElementById("barangays"));
                }
            });

            document.getElementById("provinces").addEventListener("change", function() {
                const provinceCode = this.value;
                if (provinceCode) {
                    fetchCitiesMunicipalities(provinceCode);
                } else {
                    clearSelect(document.getElementById("cities"));
                    clearSelect(document.getElementById("barangays"));
                }
            });

            document.getElementById("cities").addEventListener("change", function() {
                const cityMunicipalityCode = this.value;
                if (cityMunicipalityCode) {
                    fetchBarangays(cityMunicipalityCode);
                } else {
                    clearSelect(document.getElementById("barangays"));
                }
            });
        });

        function fetchRegions() {
            fetch('https://psgc.gitlab.io/api/regions/')
                .then(response => response.json())
                .then(data => {
                    populateSelect(document.getElementById("regions"), data);
                })
                .catch(error => console.error('Error fetching regions:', error));
        }

        function fetchProvinces(regionCode) {
            fetch(`https://psgc.gitlab.io/api/regions/${regionCode}/provinces/`)
                .then(response => response.json())
                .then(data => {
                    populateSelect(document.getElementById("provinces"), data);
                    clearSelect(document.getElementById("cities"));
                    clearSelect(document.getElementById("barangays"));
                })
                .catch(error => console.error('Error fetching provinces:', error));
        }

        function fetchCitiesMunicipalities(provinceCode) {
            fetch(`https://psgc.gitlab.io/api/provinces/${provinceCode}/cities-municipalities/`)
                .then(response => response.json())
                .then(data => {
                    populateSelect(document.getElementById("cities"), data);
                    clearSelect(document.getElementById("barangays"));
                })
                .catch(error => console.error('Error fetching cities/municipalities:', error));
        }

        function fetchBarangays(cityMunicipalityCode) {
            fetch(`https://psgc.gitlab.io/api/cities-municipalities/${cityMunicipalityCode}/barangays/`)
                .then(response => response.json())
                .then(data => {
                    populateSelect(document.getElementById("barangays"), data);
                })
                .catch(error => console.error('Error fetching barangays:', error));
        }

        function populateSelect(selectElement, data) {
            clearSelect(selectElement);
            data.forEach(item => {
                const option = document.createElement("option");
                option.value = item.code;
                option.textContent = item.name;
                selectElement.appendChild(option);
            });
        }

        function clearSelect(selectElement) {
            selectElement.innerHTML = '<option value="" selected disabled>Select</option>';
        }
