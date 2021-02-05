import React from "react";
import { Container } from "react-bootstrap";
import { Link } from "react-router-dom";
import { PUBLIC_URL } from "../../constants";

function Home() {
    return (
        <Container>
            <div className="card card-body">
                <h2>Task Management System</h2>

                <p>
                    <Link to={`${PUBLIC_URL}login`} className="btn btn-primary">
                        Sign In
                    </Link>
                </p>

                <p>
                    No account?
                    <br />
                    <Link
                        to={`${PUBLIC_URL}register`}
                        className="btn btn-success"
                    >
                        Sign Up
                    </Link>
                </p>
            </div>
        </Container>
    );
}
export default Home;
