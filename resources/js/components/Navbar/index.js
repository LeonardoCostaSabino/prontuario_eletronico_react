import React from "react";
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
} from "react-router-dom";
import Home from "./Views/Home";
import MedicalHistory from "./Views/MedicalHistory";
import Admin from "./Views/Admin";

const Navbar = () => {
  return (
    <Router>
            <div>
                <nav>
                    <ul>
                        <li>
                            <Link to="/">Home</Link>
                        </li>
                        <li>
                            <Link to="/history">MedicalHistory</Link>
                        </li>
                        <li>
                            <Link to="/admin">Admin</Link>
                        </li>
                    </ul>
                </nav>
                <Switch>
                    <Route path="/history">
                        <MedicalHistory />
                    </Route>
                    <Route path="/">
                        <Home />
                    </Route>
                    <Route path="/admin">
                        <Admin />
                    </Route>
                </Switch>
            </div>
        </Router>
  );
};

export default Navbar;
