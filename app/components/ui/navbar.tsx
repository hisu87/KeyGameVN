import React from "react";
const navbar = () => {
  return (
    <nav>
      <ul>
        <li>
          <a className="text-xl" href="/">
            Home
          </a>
        </li>
        <li>
          <a href="/dashboard">Dashboard</a>
        </li>
        <li>
          <a href="/dashboard/setting">Setting</a>
        </li>
      </ul>
    </nav>
  );
};

export default navbar;
