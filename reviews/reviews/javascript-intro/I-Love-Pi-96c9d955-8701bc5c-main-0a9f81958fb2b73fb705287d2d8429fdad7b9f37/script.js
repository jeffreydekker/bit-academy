function calculateDiameter() {
    let diameter = document.getElementById("diameter").value;
    let r = diameter / 2;
    const pi = Math.PI;
    let circumference = 2 * pi * r;
    document.getElementById("answer").innerHTML = "De omtrek van de cirkel is " + circumference;
}
