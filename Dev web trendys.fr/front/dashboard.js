new Chart(document.getElementById("myChart"), {
        type: 'line',
        data: {
            labels: ["Lundi" ,"Mardi","Mercredi","Jeudi","Aujourd'hui"],
            datasets: [{ 
                data: 
                [
                    5,
                    9,
                    5,
                    44,
                    11,
                    36,
                    20,
                    18,

    
            ],
                label: "Prenom",
                borderColor: "#00A6AD",
                fill: false
            }
            ]
        },
        options: {
            title: {
            display: true,
            text: 'Vues du profil',
            }
        }
        });

new Chart(document.getElementById("myBar"), {
    type: 'bar',
        data: {
            labels: ["Lundi" ,"Mardi","Mercredi","Jeudi","Aujourd'hui"],

            datasets: [{ backgroundColor : "#D2ECF1",
                data: 
                [
                    5,
                    9,
                    5,
                    44,
                    11,
                    36,
                    20,
                    18,
    
            ],
                label: "Prenom",
                borderColor: "#00A6AD",
                fill: false
            }
            ]
        },
        options: {
            title: {
            display: true,
            text: 'Nombre d\'impressions par heures',
            }
        }
        });

new Chart(document.getElementById("myBarChart"), {
    type: 'bar',
        data: {
            labels: ["Lundi" ,"Mardi","Mercredi","Jeudi","Aujourd'hui"],
            datasets: [{ 
                data: 
                [
                    5,
                    9,
                    5,
                    44,
                    11,
                    36,
                    20,
                    18,
    
            ],
                label: "Prenom",
                borderColor: "#00A6AD",
                fill: false
            }
            ]
        },
        options: {
            title: {
            display: true,
            text: 'Intéraction sur le profil',
            }
        }
        });