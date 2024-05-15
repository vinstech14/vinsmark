document.addEventListener("DOMContentLoaded", function() {
    const userType = localStorage.getItem("userType");
    const userInfo = {
        User: {partsToRemove: ["staffm", "interviewsheetm"] },
        Client: {partsToRemove: ["staffm", "clientm", "dashm", "dashid", "casem", "archivedm", "settingsm", "transactionm", "reportm", "calendarm"]},
        Admin: {partsToRemove: ["interviewsheetm"] }
    };

    const {partsToRemove } = userInfo[userType] || {};

    if (partsToRemove) {
        partsToRemove.forEach(partId => {
            const part = document.getElementById(partId);
            if (part) part.remove();
        });
    }
    if(userType==="Client")
        clientInitial();
});