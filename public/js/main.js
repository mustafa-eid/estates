let indicatorsContainer = document.querySelector(".indicators-container");
let designRows = document.querySelectorAll(".design-rows");

window.onload = function() {
    // Initially hide all designRows that have the 'd-none' class
    designRows.forEach(row => {
        if (!row.classList.contains('d-none')) {
            row.classList.add('d-none');
        }
    });

    for (let i = 0; i < designRows.length; i++) {
        const div = document.createElement('div');
        div.classList.add("indicator");
        div.classList.add(`indicator-${i}`);
        div.addEventListener('click', function() {
            // Remove the 'active' class from all indicators
            document.querySelectorAll('.indicator').forEach(ind => ind.classList.remove('active'));
            // Add the 'active' class to the clicked indicator
            div.classList.add('active');
            
            // Hide all designRows
            designRows.forEach(row => row.classList.add('d-none'));
            // Show the designRow with the same index as the clicked indicator
            designRows[i].classList.remove('d-none');
        });
        indicatorsContainer.appendChild(div);
    }
    // Initially set the first indicator and corresponding designRow to active and visible
    indicatorsContainer.firstElementChild.classList.add("active");
    designRows[0].classList.remove('d-none');
    console.log(indicatorsContainer);
};

let workCards= document.querySelectorAll(".works-card")
workCards.forEach((card)=>{
  card.addEventListener("mouseover",function(){
    card.classList.add("shadow")
    const button = card.querySelector('.btn');
    button.style.backgroundColor = '#FD661F'; // Change button background color
    button.style.color = '#fff'; // Change button text color for better visibility
  })
      // Add event listener for mouseout (hover out)
      card.addEventListener('mouseout', function() {
        card.classList.remove("shadow")
        const button = card.querySelector('.btn');
        button.style.backgroundColor = ''; // Revert button background color
        button.style.color = '#0B7077'; // Revert button text color
    });
})