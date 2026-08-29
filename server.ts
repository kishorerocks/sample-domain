import http from "node:http";
import { spawn } from "node:child_process";
import path from "node:path";
import process from "node:process";

const PORT = 3000;
const PHP_PORT = 8080;

// Start PHP built-in server
console.log(`Starting PHP server on port ${PHP_PORT}...`);
const phpProcess = spawn("php", ["-S", `127.0.0.1:${PHP_PORT}`, "router.php"], {
  cwd: process.cwd(),
  stdio: "inherit",
});

phpProcess.on("error", (err) => {
  console.error("Failed to start PHP process:", err);
});

// Create proxy server on PORT 3000
const server = http.createServer((req, res) => {
  const options: http.RequestOptions = {
    hostname: "127.0.0.1",
    port: PHP_PORT,
    path: req.url,
    method: req.method,
    headers: req.headers,
  };

  const proxyReq = http.request(options, (proxyRes) => {
    res.writeHead(proxyRes.statusCode || 200, proxyRes.headers);
    proxyRes.pipe(res, { end: true });
  });

  proxyReq.on("error", (err) => {
    console.error("Proxy error to PHP:", err);
    res.writeHead(502, { "Content-Type": "text/html; charset=utf-8" });
    res.end(`
      <div style="font-family: sans-serif; padding: 40px; text-align: center; background: #131316; color: #f1f0f4;">
        <h1 style="color: #f6c000;">KK LifeWise Server Initializing...</h1>
        <p>PHP backend is loading. Please refresh in a moment.</p>
      </div>
    `);
  });

  req.pipe(proxyReq, { end: true });
});

server.listen(PORT, "0.0.0.0", () => {
  console.log(`KK LifeWise web server running at http://0.0.0.0:${PORT}`);
});

process.on("SIGINT", () => {
  phpProcess.kill();
  process.exit();
});
