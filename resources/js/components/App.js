import React from "react";
import ReactDOM from 'react-dom';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
} from "react-router-dom";
import Home from "./Views/Home";
import Example from "./Views/Example";
import Admin from "./Views/Admin";

export default function App() {
    return (
        <Router>
            <div>
                <nav>
                    <ul>
                        <li>
                            <Link to="/">Home</Link>
                        </li>
                        <li>
                            <Link to="/example">Example</Link>
                        </li>
                        <li>
                            <Link to="/admin">Admin</Link>
                        </li>
                    </ul>
                </nav>
                <Switch>
                    <Route path="/example">
                        <Example />
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
}

ReactDOM.render(
    <App />,
    document.getElementById('root')
);
