        const firstSelect = document.getElementById("firstSelect");
        const secondSelectContainer = document.getElementById("secondSelectContainer");
        const thirdSelectContainer = document.getElementById("thirdSelectContainer");

        // Event listener untuk select pertama
        firstSelect.addEventListener("change", function() {
            const selectedOption = firstSelect.value;

            // Hapus select kedua dan ketiga yang ada
            secondSelectContainer.innerHTML = "";
            thirdSelectContainer.innerHTML = "";

            if (selectedOption === "a") {
                // Jika user memilih "a", tampilkan select kedua (a1/b1)
                const secondSelect = document.createElement("select");
                secondSelect.classList.add("form-select");
                secondSelect.innerHTML = `
                    <option selected>-- Opsi Pilihan --</option>
                    <option value="a1">2 Yayasan</option>
                    <option value="b1">1 Unit Sekolah</option>
                `;
                secondSelectContainer.appendChild(secondSelect);

                // Event listener untuk select kedua
                secondSelect.addEventListener("change", function() {
                    const selectedOption = secondSelect.value;
                    // Tampilkan select ketiga jika user memilih "a1"
                    if (selectedOption === "a1") {
                        const thirdSelect = document.createElement("select");
                        thirdSelect.classList.add("form-select");
                        thirdSelect.innerHTML = `
                            <option selected>-- Opsi Pilihan --</option>
                            <option value="ml">Manajemen Lembaga</option>
                            <option value="mk">Manajemen keuangan</option>
                            <option value="sdm">Manajemen SDM</option>
                            <option value="bpi">Pembinaan SDM(BPI)</option>
                            <option value="mp">Manajemen pendidikan</option>
                            <option value="mdi">Manajemen Data dan Informasi</option>
                            <option value="mkh">Manajemen Kehumasan</option>
                        `;
                        thirdSelectContainer.innerHTML = "";
                        thirdSelectContainer.appendChild(thirdSelect);
                        // Event Listener untuk Select Ketiga
                        const third2Select = document.createElement("select");
                        third2Select.classList.add("form-select");
                        third2Select.innerHTML = `
                            <option selected>-- Opsi Pilihan --</option>
                            <option value="ml">Manajemen Lembaga</option>
                            <option value="mk">Manajemen keuangan</option>
                            <option value="sdm">Manajemen SDM</option>
                            <option value="bpi">Pembinaan SDM(BPI)</option>
                            <option value="mp">Manajemen pendidikan</option>
                            <option value="mdi">Manajemen Data dan Informasi</option>
                            <option value="mkh">Manajemen Kehumasan</option>
                        `;
                        third2SelectContainer.innerHTML = "";
                        third2SelectContainer.appendChild(third2Select);
                    } else if (selectedOption === "b1") {
                        // select option b1
                        const third3Select = document.createElement("select");
                        third3Select.classList.add("form-select");
                        third3Select.innerHTML = `
                            <option selected>-- Opsi Pilihan --</option>
                            <option value="tkit">TKIT Nur Hidayah</option>
                            <option value="sdit">SDIT Nur Hidayah</option>
                            <option value="smpit">SMPIT Nur Hidayah</option>
                            <option value="smait">SMAIT Nur Hidayah</option>
                            <option value="lksa">LKSA Nur Hidayah</option>
                            <option value="pp">PP Nur Hidayah</option>
                            <option value="ltq">LTQ Nur Hidayah</option>
                            <option value="laz">LAZ & NADZIR Wakaf Nur Hidayah</option>
                            <option value="bppu">BPPU Nur Hidayah</option>
                            <option value="bpin">BPI Nur Hidayah</option>
                        `;
                        third3SelectContainer.innerHTML = "";
                        third3SelectContainer.appendChild(third3Select);
                    } else {
                        thirdSelectContainer.innerHTML = "";
                        third2SelectContainer.innerHTML = "";
                        third3 SelectContainer.innerHTML = "";
                    }
                });
            } else if (selectedOption === "b") {
                // Jika user memilih "b", tampilkan select kedua (a2/b2)
                const secondSelect = document.createElement("select");
                secondSelect.innerHTML = `
                    <option value="a2">A2</option>
                    <option value="b2">B2</option>
                `;
                secondSelectContainer.appendChild(secondSelect);

                // Event listener untuk select kedua
                secondSelect.addEventListener("change", function() {
                    const selectedOption = secondSelect.value;
                    // Tampilkan select ketiga jika user memilih "a2"
                    if (selectedOption === "a2") {
                        const thirdSelect = document.createElement("select");
                        thirdSelect.innerHTML = `
                            <option value="a4">A4</option>
                            <option value="b4">B4</option>
                            <option value="c4">C4</option>
                        `;
                        thirdSelectContainer.innerHTML = "";
                        thirdSelectContainer.appendChild(thirdSelect);
                    } else {
                        thirdSelectContainer.innerHTML = "";
                    }
                });
            } else if (selectedOption === "c") {
                // Jika user memilih "c", tampilkan select kedua (c1/c2)
                const secondSelect = document.createElement("select");
                secondSelect.innerHTML = `
                    <option value="c1">C1</option>
                    <option value="c2">C2</option>
                `;
                secondSelectContainer.appendChild(secondSelect);
            }
        });