import React, { StrictMode } from "react";
import ReactDOM from "react-dom/client";
import Hello from "./Components/Hello";

if (document.getElementById("starter-page") != null) {
    const starterPage = ReactDOM.createRoot(
        document.getElementById("starter-page")
    );
    starterPage.render(
        <StrictMode>
            <Hello />
        </StrictMode>
    );
}
