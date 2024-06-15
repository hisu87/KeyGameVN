import { ReactDOM } from "react";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Login from "@/app/auth/login/page";
import Register from "@/app/auth/register/page";
import Home from "@/app/page";

export default function AppRouter() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/login" element={<Login />} />
        <Route path="/register" element={<Register />} />
      </Routes>
    </BrowserRouter>
  );
}
